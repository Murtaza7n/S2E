<?php

namespace App\Http\Controllers\Finance;

use App\Http\Controllers\Controller;
use App\Models\ChartOfAccount;
use App\Models\VoucherEntry;
use App\Models\Party;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class FinanceController extends Controller
{
    public function trialBalance(Request $request)
    {
        $date = $request->filled('date') ? $request->date : date('Y-m-d');

        $accounts = ChartOfAccount::where('is_active', true)->get();
        $balances = [];

        foreach ($accounts as $account) {
            $openingBalance = $account->opening_balance;
            $openingType = $account->balance_type;

            // Get posted voucher entries
            $debit = VoucherEntry::where('account_id', $account->id)
                ->whereHas('voucher', function($q) use ($date) {
                    $q->where('status', 'posted')
                      ->where('voucher_date', '<=', $date);
                })
                ->sum('debit');

            $credit = VoucherEntry::where('account_id', $account->id)
                ->whereHas('voucher', function($q) use ($date) {
                    $q->where('status', 'posted')
                      ->where('voucher_date', '<=', $date);
                })
                ->sum('credit');

            $balance = $openingType === 'dr' 
                ? $openingBalance + $debit - $credit
                : $openingBalance + $credit - $debit;

            if (abs($balance) > 0.01) {
                $balances[] = [
                    'account' => $account,
                    'debit' => $balance > 0 ? abs($balance) : 0,
                    'credit' => $balance < 0 ? abs($balance) : 0,
                ];
            }
        }

        $totalDebit = collect($balances)->sum('debit');
        $totalCredit = collect($balances)->sum('credit');

        return view('finance.trial-balance', compact('balances', 'totalDebit', 'totalCredit', 'date'));
    }

    public function balanceSheet(Request $request)
    {
        $date = $request->filled('date') ? $request->date : date('Y-m-d');

        $assets = $this->getAccountBalances('asset', $date);
        $liabilities = $this->getAccountBalances('liability', $date);
        $equity = $this->getAccountBalances('equity', $date);

        $totalAssets = collect($assets)->sum('balance');
        $totalLiabilities = collect($liabilities)->sum('balance');
        $totalEquity = collect($equity)->sum('balance');

        return view('finance.balance-sheet', compact('assets', 'liabilities', 'equity', 'totalAssets', 'totalLiabilities', 'totalEquity', 'date'));
    }

    public function profitLoss(Request $request)
    {
        $fromDate = $request->filled('from_date') ? $request->from_date : date('Y-m-01');
        $toDate = $request->filled('to_date') ? $request->to_date : date('Y-m-d');

        $income = $this->getAccountBalances('income', $toDate, $fromDate);
        $expenses = $this->getAccountBalances('expense', $toDate, $fromDate);

        $totalIncome = collect($income)->sum('balance');
        $totalExpenses = collect($expenses)->sum('balance');
        $netProfit = $totalIncome - $totalExpenses;

        return view('finance.profit-loss', compact('income', 'expenses', 'totalIncome', 'totalExpenses', 'netProfit', 'fromDate', 'toDate'));
    }

    public function partyOutstanding(Request $request)
    {
        $parties = Party::where('is_active', true)->get();
        $outstandings = [];

        foreach ($parties as $party) {
            $balance = $this->calculatePartyBalance($party->id);
            if (abs($balance) > 0.01) {
                $outstandings[] = [
                    'party' => $party,
                    'balance' => $balance,
                    'type' => $balance > 0 ? 'Receivable' : 'Payable',
                ];
            }
        }

        return view('finance.party-outstanding', compact('outstandings'));
    }

    private function getAccountBalances($type, $toDate, $fromDate = null)
    {
        $accounts = ChartOfAccount::where('type', $type)
            ->where('is_active', true)
            ->get();

        $balances = [];
        foreach ($accounts as $account) {
            $openingBalance = $account->opening_balance;
            $openingType = $account->balance_type;

            $query = VoucherEntry::where('account_id', $account->id)
                ->whereHas('voucher', function($q) use ($toDate) {
                    $q->where('status', 'posted')
                      ->where('voucher_date', '<=', $toDate);
                });

            if ($fromDate) {
                $query->whereHas('voucher', function($q) use ($fromDate) {
                    $q->where('voucher_date', '>=', $fromDate);
                });
            }

            $debit = (clone $query)->sum('debit');
            $credit = (clone $query)->sum('credit');

            $balance = $openingType === 'dr' 
                ? $openingBalance + $debit - $credit
                : $openingBalance + $credit - $debit;

            if (abs($balance) > 0.01) {
                $balances[] = [
                    'account' => $account,
                    'balance' => $balance,
                ];
            }
        }

        return $balances;
    }

    private function calculatePartyBalance($partyId)
    {
        $party = Party::find($partyId);
        $openingBalance = $party->opening_balance;
        $openingType = $party->balance_type;

        $debit = \App\Models\PartyLedger::where('party_id', $partyId)->sum('debit');
        $credit = \App\Models\PartyLedger::where('party_id', $partyId)->sum('credit');

        return $openingType === 'dr' 
            ? $openingBalance + $debit - $credit
            : $openingBalance + $credit - $debit;
    }
}


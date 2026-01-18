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

    public function changeVoucherDate()
    {
        return view('finance.change-voucher-date');
    }

    public function updateVoucherDate(Request $request)
    {
        $request->validate([
            'voucher_id' => 'required|exists:vouchers,id',
            'new_date' => 'required|date',
        ]);

        $voucher = \App\Models\Voucher::find($request->voucher_id);
        $voucher->update(['voucher_date' => $request->new_date]);

        return redirect()->route('finance.change-voucher-date')
            ->with('success', 'Voucher date updated successfully.');
    }

    public function listChartOfAccounts()
    {
        $accounts = ChartOfAccount::with('group')->latest()->paginate(100);
        return view('finance.list-chart-of-accounts', compact('accounts'));
    }

    public function listVouchers(Request $request)
    {
        $query = \App\Models\Voucher::with('entries.account');
        
        if ($request->filled('type')) {
            $query->where('voucher_type', $request->type);
        }
        if ($request->filled('status')) {
            $query->where('status', $request->status);
        }
        
        $vouchers = $query->latest()->paginate(100);
        return view('finance.list-vouchers', compact('vouchers'));
    }

    public function cnExpenses(Request $request)
    {
        $query = \App\Models\CnExpense::with(['cn', 'account']);
        
        if ($request->filled('date_from')) {
            $query->whereHas('cn', function($q) use ($request) {
                $q->where('cn_date', '>=', $request->date_from);
            });
        }
        
        $expenses = $query->latest()->paginate(100);
        return view('finance.cn-expenses', compact('expenses'));
    }

    public function masterSchedule(Request $request)
    {
        $date = $request->filled('date') ? $request->date : date('Y-m-d');
        $accounts = ChartOfAccount::where('is_active', true)->get();
        $schedule = [];
        
        foreach ($accounts as $account) {
            $balance = $this->getAccountBalance($account->id, $date);
            if (abs($balance) > 0.01) {
                $schedule[] = ['account' => $account, 'balance' => $balance];
            }
        }
        
        return view('finance.master-schedule', compact('schedule', 'date'));
    }

    public function accountsLedger(Request $request)
    {
        $accountId = $request->account_id ?? ChartOfAccount::first()->id;
        $date = $request->filled('date') ? $request->date : date('Y-m-d');
        
        $account = ChartOfAccount::find($accountId);
        $entries = VoucherEntry::where('account_id', $accountId)
            ->whereHas('voucher', function($q) use ($date) {
                $q->where('status', 'posted')->where('voucher_date', '<=', $date);
            })
            ->with('voucher')
            ->latest()
            ->paginate(50);
        
        return view('finance.accounts-ledger', compact('account', 'entries', 'date'));
    }

    public function profitLossComparative(Request $request)
    {
        $currentFrom = $request->filled('current_from') ? $request->current_from : date('Y-m-01');
        $currentTo = $request->filled('current_to') ? $request->current_to : date('Y-m-d');
        $previousFrom = $request->filled('previous_from') ? $request->previous_from : date('Y-m-01', strtotime('-1 month'));
        $previousTo = $request->filled('previous_to') ? $request->previous_to : date('Y-m-d', strtotime('-1 month'));
        
        $current = $this->getProfitLossData($currentFrom, $currentTo);
        $previous = $this->getProfitLossData($previousFrom, $previousTo);
        
        return view('finance.profit-loss-comparative', compact('current', 'previous', 'currentFrom', 'currentTo', 'previousFrom', 'previousTo'));
    }

    public function monthClosingBalance(Request $request)
    {
        $year = $request->filled('year') ? $request->year : date('Y');
        $months = [];
        
        for ($i = 1; $i <= 12; $i++) {
            $monthEnd = date("Y-m-t", strtotime("$year-$i-01"));
            $months[] = [
                'month' => date('F Y', strtotime("$year-$i-01")),
                'balance' => $this->getTotalBalance($monthEnd),
            ];
        }
        
        return view('finance.month-closing-balance', compact('months', 'year'));
    }

    public function groupOutstanding()
    {
        return $this->partyOutstanding(new Request());
    }

    public function groupLedger(Request $request)
    {
        $groupId = $request->group_id;
        $accounts = ChartOfAccount::where('group_id', $groupId)->get();
        $entries = [];
        
        foreach ($accounts as $account) {
            $accountEntries = VoucherEntry::where('account_id', $account->id)
                ->whereHas('voucher', function($q) {
                    $q->where('status', 'posted');
                })
                ->with('voucher')
                ->get();
            
            $entries = array_merge($entries, $accountEntries->toArray());
        }
        
        return view('finance.group-ledger', compact('entries', 'groupId'));
    }

    public function trialBalanceConsole(Request $request)
    {
        return $this->trialBalance($request);
    }

    public function masterScheduleConsole(Request $request)
    {
        return $this->masterSchedule($request);
    }

    public function accountsLedgerConsole(Request $request)
    {
        return $this->accountsLedger($request);
    }

    public function plComparativeConsole(Request $request)
    {
        return $this->profitLossComparative($request);
    }

    public function accountGroupingDetail(Request $request)
    {
        $groupings = \App\Models\AccountGrouping::with('accounts')->get();
        return view('finance.account-grouping-detail', compact('groupings'));
    }

    public function salesTaxRegisterInvoice(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $invoices = \App\Models\Invoice::whereBetween('invoice_date', [$fromDate, $toDate])
            ->whereNotNull('sales_tax_amount')
            ->with('party')
            ->get();
        
        return view('finance.sales-tax-register-invoice', compact('invoices', 'fromDate', 'toDate'));
    }

    public function salesTaxRegisterCustomer(Request $request)
    {
        $fromDate = $request->filled('date_from') ? $request->date_from : date('Y-m-01');
        $toDate = $request->filled('date_to') ? $request->date_to : date('Y-m-d');
        
        $parties = Party::whereHas('invoices', function($q) use ($fromDate, $toDate) {
            $q->whereBetween('invoice_date', [$fromDate, $toDate])
              ->whereNotNull('sales_tax_amount');
        })->get();
        
        $register = [];
        foreach ($parties as $party) {
            $register[] = [
                'party' => $party,
                'total_tax' => $party->invoices()
                    ->whereBetween('invoice_date', [$fromDate, $toDate])
                    ->sum('sales_tax_amount'),
            ];
        }
        
        return view('finance.sales-tax-register-customer', compact('register', 'fromDate', 'toDate'));
    }

    public function partyOutstandingDetailed(Request $request)
    {
        $partyId = $request->party_id;
        $party = Party::find($partyId);
        
        $ledgerEntries = \App\Models\PartyLedger::where('party_id', $partyId)
            ->with(['voucher', 'invoice'])
            ->latest()
            ->paginate(100);
        
        return view('finance.party-outstanding-detailed', compact('party', 'ledgerEntries'));
    }

    public function partyOutstandingAging(Request $request)
    {
        $parties = Party::where('is_active', true)->get();
        $aging = [];
        
        foreach ($parties as $party) {
            $balance = $this->calculatePartyBalance($party->id);
            if (abs($balance) > 0.01) {
                $aging[] = [
                    'party' => $party,
                    'balance' => $balance,
                    'current' => $this->getAgingAmount($party->id, 0, 30),
                    'days30' => $this->getAgingAmount($party->id, 31, 60),
                    'days60' => $this->getAgingAmount($party->id, 61, 90),
                    'days90' => $this->getAgingAmount($party->id, 91),
                ];
            }
        }
        
        return view('finance.party-outstanding-aging', compact('aging'));
    }

    public function partyClearedOutstanding(Request $request)
    {
        $parties = Party::where('is_active', true)->get();
        $details = [];
        
        foreach ($parties as $party) {
            $cleared = \App\Models\PartyLedger::where('party_id', $party->id)
                ->where('payment_status', 'cleared')
                ->sum(DB::raw('debit - credit'));
            
            $outstanding = $this->calculatePartyBalance($party->id);
            
            $details[] = [
                'party' => $party,
                'cleared' => $cleared,
                'outstanding' => $outstanding,
            ];
        }
        
        return view('finance.party-cleared-outstanding', compact('details'));
    }

    private function getAccountBalance($accountId, $date)
    {
        $account = ChartOfAccount::find($accountId);
        $openingBalance = $account->opening_balance;
        $openingType = $account->balance_type;
        
        $debit = VoucherEntry::where('account_id', $accountId)
            ->whereHas('voucher', function($q) use ($date) {
                $q->where('status', 'posted')->where('voucher_date', '<=', $date);
            })
            ->sum('debit');
        
        $credit = VoucherEntry::where('account_id', $accountId)
            ->whereHas('voucher', function($q) use ($date) {
                $q->where('status', 'posted')->where('voucher_date', '<=', $date);
            })
            ->sum('credit');
        
        return $openingType === 'dr' 
            ? $openingBalance + $debit - $credit
            : $openingBalance + $credit - $debit;
    }

    private function getTotalBalance($date)
    {
        $accounts = ChartOfAccount::where('is_active', true)->get();
        $total = 0;
        
        foreach ($accounts as $account) {
            $total += $this->getAccountBalance($account->id, $date);
        }
        
        return $total;
    }

    private function getProfitLossData($fromDate, $toDate)
    {
        $income = $this->getAccountBalances('income', $toDate, $fromDate);
        $expenses = $this->getAccountBalances('expense', $toDate, $fromDate);
        
        return [
            'income' => collect($income)->sum('balance'),
            'expenses' => collect($expenses)->sum('balance'),
            'net' => collect($income)->sum('balance') - collect($expenses)->sum('balance'),
        ];
    }

    private function getAgingAmount($partyId, $daysFrom, $daysTo = null)
    {
        $dateFrom = $daysTo ? date('Y-m-d', strtotime("-$daysTo days")) : '1970-01-01';
        $dateTo = date('Y-m-d', strtotime("-$daysFrom days"));
        
        return \App\Models\PartyLedger::where('party_id', $partyId)
            ->whereBetween('entry_date', [$dateFrom, $dateTo])
            ->sum(DB::raw('debit - credit'));
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


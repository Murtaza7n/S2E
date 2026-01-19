<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnExpense extends Model
{
    use HasFactory;

    protected $fillable = [
        'cn_id', 'voucher_entry_id', 'expense_account_id',
        'amount', 'description', 'expense_date'
    ];

    protected $casts = [
        'amount' => 'decimal:2',
        'expense_date' => 'date',
    ];

    public function consignmentNote()
    {
        return $this->belongsTo(ConsignmentNote::class, 'cn_id');
    }

    public function expenseAccount()
    {
        return $this->belongsTo(ChartOfAccount::class, 'expense_account_id');
    }
}


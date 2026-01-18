<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class EmployeeLoan extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'loan_number', 'loan_date', 'loan_amount',
        'installments', 'monthly_installment', 'paid_amount',
        'remaining_amount', 'status', 'remarks'
    ];

    protected $casts = [
        'loan_date' => 'date',
        'loan_amount' => 'decimal:2',
        'monthly_installment' => 'decimal:2',
        'paid_amount' => 'decimal:2',
        'remaining_amount' => 'decimal:2',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function installments()
    {
        return $this->hasMany(LoanInstallment::class, 'loan_id');
    }
}


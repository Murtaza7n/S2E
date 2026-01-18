<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollRecord extends Model
{
    use HasFactory;

    protected $fillable = [
        'payroll_period_id', 'employee_id', 'basic_salary', 'total_allowances',
        'gross_salary', 'total_deductions', 'loan_deductions', 'leave_deductions',
        'tax_deductions', 'other_deductions', 'net_salary',
        'working_days', 'present_days', 'absent_days', 'leave_days', 'remarks'
    ];

    protected $casts = [
        'basic_salary' => 'decimal:2',
        'total_allowances' => 'decimal:2',
        'gross_salary' => 'decimal:2',
        'total_deductions' => 'decimal:2',
        'loan_deductions' => 'decimal:2',
        'leave_deductions' => 'decimal:2',
        'tax_deductions' => 'decimal:2',
        'other_deductions' => 'decimal:2',
        'net_salary' => 'decimal:2',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function payrollPeriod()
    {
        return $this->belongsTo(PayrollPeriod::class);
    }
}


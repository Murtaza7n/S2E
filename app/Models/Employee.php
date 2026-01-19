<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Employee extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'employee_code', 'name', 'father_name', 'cnic', 'date_of_birth',
        'joining_date', 'phone', 'email', 'address', 'gender', 'marital_status',
        'bank_account_number', 'bank_name', 'department_id', 'designation_id',
        'cargo_office_id', 'basic_salary', 'salary_type', 'employment_type',
        'is_active', 'leaving_date', 'leaving_reason'
    ];

    protected $casts = [
        'date_of_birth' => 'date',
        'joining_date' => 'date',
        'leaving_date' => 'date',
        'basic_salary' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function department()
    {
        return $this->belongsTo(Department::class);
    }

    public function designation()
    {
        return $this->belongsTo(Designation::class);
    }

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }

    public function allowances()
    {
        return $this->hasMany(EmployeeAllowance::class);
    }

    public function deductions()
    {
        return $this->hasMany(EmployeeDeduction::class);
    }

    public function loans()
    {
        return $this->hasMany(EmployeeLoan::class);
    }
}


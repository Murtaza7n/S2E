<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AuthorizedLeave extends Model
{
    use HasFactory;

    protected $fillable = [
        'employee_id', 'leave_type', 'from_date', 'to_date',
        'days', 'reason', 'status', 'approved_by', 'approved_date', 'remarks'
    ];

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'approved_date' => 'date',
    ];

    public function employee()
    {
        return $this->belongsTo(Employee::class);
    }

    public function approvedBy()
    {
        return $this->belongsTo(User::class, 'approved_by');
    }
}


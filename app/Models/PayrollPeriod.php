<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PayrollPeriod extends Model
{
    use HasFactory;

    protected $fillable = [
        'period', 'from_date', 'to_date', 'status',
        'processed_by', 'processed_date'
    ];

    protected $casts = [
        'from_date' => 'date',
        'to_date' => 'date',
        'processed_date' => 'date',
    ];

    public function records()
    {
        return $this->hasMany(PayrollRecord::class);
    }
}


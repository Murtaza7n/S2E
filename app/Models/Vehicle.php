<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Vehicle extends Model
{
    use HasFactory;

    protected $fillable = [
        'registration_number', 'vehicle_type', 'driver_name',
        'driver_phone', 'capacity_kg', 'is_active'
    ];

    protected $casts = [
        'capacity_kg' => 'decimal:2',
        'is_active' => 'boolean',
    ];
}


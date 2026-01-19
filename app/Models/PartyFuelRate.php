<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartyFuelRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'party_id', 'fuel_rate', 'rate_type', 'effective_from', 'effective_to', 'is_active'
    ];

    protected $casts = [
        'fuel_rate' => 'decimal:2',
        'effective_from' => 'date',
        'effective_to' => 'date',
        'is_active' => 'boolean',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}


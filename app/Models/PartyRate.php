<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartyRate extends Model
{
    use HasFactory;

    protected $fillable = [
        'party_id', 'city_id', 'item_code_id', 'rate', 'rate_type',
        'min_charge', 'effective_from', 'effective_to', 'is_active'
    ];

    protected $casts = [
        'rate' => 'decimal:2',
        'min_charge' => 'decimal:2',
        'effective_from' => 'date',
        'effective_to' => 'date',
        'is_active' => 'boolean',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function itemCode()
    {
        return $this->belongsTo(ItemCode::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Party extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'code', 'name', 'contact_person', 'phone', 'email', 'address',
        'ntn', 'strn', 'type', 'city_id', 'area_id',
        'opening_balance', 'balance_type', 'is_active'
    ];

    protected $casts = [
        'opening_balance' => 'decimal:2',
        'is_active' => 'boolean',
    ];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function area()
    {
        return $this->belongsTo(Area::class);
    }

    public function consignmentNotes()
    {
        return $this->hasMany(ConsignmentNote::class);
    }

    public function invoices()
    {
        return $this->hasMany(Invoice::class);
    }

    public function rates()
    {
        return $this->hasMany(PartyRate::class);
    }
}


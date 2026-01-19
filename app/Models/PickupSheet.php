<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupSheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'pickup_sheet_number', 'pickup_sheet_date', 'cargo_office_id',
        'rider_id', 'total_cns', 'picked_count', 'status', 'remarks', 'created_by'
    ];

    protected $casts = [
        'pickup_sheet_date' => 'date',
    ];

    public function items()
    {
        return $this->hasMany(PickupSheetItem::class);
    }

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }

    public function rider()
    {
        return $this->belongsTo(Rider::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}


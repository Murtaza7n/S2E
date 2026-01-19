<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverySheet extends Model
{
    use HasFactory;

    protected $fillable = [
        'delivery_sheet_number', 'delivery_sheet_date', 'cargo_office_id',
        'rider_id', 'total_cns', 'delivered_count', 'returned_count',
        'status', 'remarks', 'created_by'
    ];

    protected $casts = [
        'delivery_sheet_date' => 'date',
    ];

    public function items()
    {
        return $this->hasMany(DeliverySheetItem::class);
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


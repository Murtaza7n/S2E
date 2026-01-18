<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PickupSheetItem extends Model
{
    use HasFactory;

    protected $fillable = ['pickup_sheet_id', 'cn_id', 'sequence'];

    public function pickupSheet()
    {
        return $this->belongsTo(PickupSheet::class);
    }

    public function consignmentNote()
    {
        return $this->belongsTo(ConsignmentNote::class, 'cn_id');
    }
}


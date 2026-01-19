<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DeliverySheetItem extends Model
{
    use HasFactory;

    protected $fillable = ['delivery_sheet_id', 'cn_id', 'sequence'];

    public function deliverySheet()
    {
        return $this->belongsTo(DeliverySheet::class);
    }

    public function consignmentNote()
    {
        return $this->belongsTo(ConsignmentNote::class, 'cn_id');
    }
}


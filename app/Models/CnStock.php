<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnStock extends Model
{
    use HasFactory;

    protected $fillable = [
        'cargo_office_id', 'from_cn_number', 'to_cn_number',
        'available_quantity', 'used_quantity'
    ];

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }
}


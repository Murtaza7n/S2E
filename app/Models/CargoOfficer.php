<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoOfficer extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'phone', 'email', 'cargo_office_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }
}


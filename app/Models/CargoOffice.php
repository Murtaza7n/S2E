<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CargoOffice extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'address', 'phone', 'city_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function officers()
    {
        return $this->hasMany(CargoOfficer::class);
    }

    public function consignmentNotes()
    {
        return $this->hasMany(ConsignmentNote::class);
    }
}


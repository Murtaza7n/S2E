<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'city_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function city()
    {
        return $this->belongsTo(City::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class City extends Model
{
    use HasFactory;

    protected $fillable = ['code', 'name', 'zone_id', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];

    public function zone()
    {
        return $this->belongsTo(Zone::class);
    }

    public function areas()
    {
        return $this->hasMany(Area::class);
    }

    public function parties()
    {
        return $this->hasMany(Party::class);
    }
}


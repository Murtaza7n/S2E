<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ControlCode extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name', 'description', 'account_type', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function accounts()
    {
        return $this->hasMany(ChartOfAccount::class, 'control_code_id');
    }
}


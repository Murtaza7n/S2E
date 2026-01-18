<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AccountGrouping extends Model
{
    use HasFactory;

    protected $fillable = [
        'code', 'name', 'description', 'parent_id', 'is_active'
    ];

    protected $casts = [
        'is_active' => 'boolean',
    ];

    public function parent()
    {
        return $this->belongsTo(AccountGrouping::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(AccountGrouping::class, 'parent_id');
    }

    public function accounts()
    {
        return $this->hasMany(ChartOfAccount::class, 'group_id');
    }
}


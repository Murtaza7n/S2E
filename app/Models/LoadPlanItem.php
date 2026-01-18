<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadPlanItem extends Model
{
    use HasFactory;

    protected $fillable = ['load_plan_id', 'cn_id', 'sequence'];

    public function loadPlan()
    {
        return $this->belongsTo(LoadPlan::class);
    }

    public function consignmentNote()
    {
        return $this->belongsTo(ConsignmentNote::class, 'cn_id');
    }
}


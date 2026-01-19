<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LoadPlan extends Model
{
    use HasFactory;

    protected $fillable = [
        'load_plan_number', 'load_plan_date', 'vehicle_id',
        'origin_office_id', 'destination_office_id', 'total_cns',
        'total_weight', 'status', 'dispatch_date', 'receive_date',
        'remarks', 'created_by'
    ];

    protected $casts = [
        'load_plan_date' => 'date',
        'dispatch_date' => 'date',
        'receive_date' => 'date',
        'total_weight' => 'decimal:3',
    ];

    public function items()
    {
        return $this->hasMany(LoadPlanItem::class);
    }

    public function consignmentNotes()
    {
        return $this->hasManyThrough(ConsignmentNote::class, LoadPlanItem::class, 'load_plan_id', 'id', 'id', 'cn_id');
    }

    public function vehicle()
    {
        return $this->belongsTo(Vehicle::class);
    }

    public function originOffice()
    {
        return $this->belongsTo(CargoOffice::class, 'origin_office_id');
    }

    public function destinationOffice()
    {
        return $this->belongsTo(CargoOffice::class, 'destination_office_id');
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }
}


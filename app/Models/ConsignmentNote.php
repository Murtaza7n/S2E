<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ConsignmentNote extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'cn_number', 'cn_date', 'cargo_office_id', 'party_id', 'item_code_id',
        'origin_city_id', 'destination_city_id', 'origin_area_id', 'destination_area_id',
        'consignor_name', 'consignor_phone', 'consignor_address',
        'consignee_name', 'consignee_phone', 'consignee_address',
        'pieces', 'weight', 'rate', 'freight', 'cod_amount', 'fuel_charge',
        'other_charges', 'total_amount', 'status',
        'pickup_date', 'delivery_date', 'return_date',
        'is_in_load_plan', 'load_plan_id', 'is_in_delivery_sheet', 'delivery_sheet_id',
        'is_invoiced', 'invoice_id', 'pickup_rider_id', 'delivery_rider_id',
        'cost_price', 'profit_loss', 'remarks', 'created_by'
    ];

    protected $casts = [
        'cn_date' => 'date',
        'pickup_date' => 'date',
        'delivery_date' => 'date',
        'return_date' => 'date',
        'weight' => 'decimal:3',
        'rate' => 'decimal:2',
        'freight' => 'decimal:2',
        'cod_amount' => 'decimal:2',
        'fuel_charge' => 'decimal:2',
        'other_charges' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'cost_price' => 'decimal:2',
        'profit_loss' => 'decimal:2',
        'is_in_load_plan' => 'boolean',
        'is_in_delivery_sheet' => 'boolean',
        'is_invoiced' => 'boolean',
    ];

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function itemCode()
    {
        return $this->belongsTo(ItemCode::class);
    }

    public function originCity()
    {
        return $this->belongsTo(City::class, 'origin_city_id');
    }

    public function destinationCity()
    {
        return $this->belongsTo(City::class, 'destination_city_id');
    }

    public function originArea()
    {
        return $this->belongsTo(Area::class, 'origin_area_id');
    }

    public function destinationArea()
    {
        return $this->belongsTo(Area::class, 'destination_area_id');
    }

    public function pickupRider()
    {
        return $this->belongsTo(Rider::class, 'pickup_rider_id');
    }

    public function deliveryRider()
    {
        return $this->belongsTo(Rider::class, 'delivery_rider_id');
    }

    public function loadPlan()
    {
        return $this->belongsTo(LoadPlan::class);
    }

    public function deliverySheet()
    {
        return $this->belongsTo(DeliverySheet::class);
    }

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function expenses()
    {
        return $this->hasMany(CnExpense::class, 'cn_id');
    }
}


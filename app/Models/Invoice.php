<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Invoice extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'invoice_number', 'invoice_date', 'party_id', 'cargo_office_id',
        'total_cns', 'subtotal', 'total_charges', 'total_fuel',
        'total_amount', 'tax_amount', 'grand_total', 'status', 'remarks', 'created_by'
    ];

    protected $casts = [
        'invoice_date' => 'date',
        'subtotal' => 'decimal:2',
        'total_charges' => 'decimal:2',
        'total_fuel' => 'decimal:2',
        'total_amount' => 'decimal:2',
        'tax_amount' => 'decimal:2',
        'grand_total' => 'decimal:2',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }

    public function cargoOffice()
    {
        return $this->belongsTo(CargoOffice::class);
    }

    public function items()
    {
        return $this->hasMany(InvoiceItem::class);
    }

    public function chargeItems()
    {
        return $this->hasMany(InvoiceChargeItem::class);
    }

    public function consignmentNotes()
    {
        return $this->hasManyThrough(ConsignmentNote::class, InvoiceItem::class, 'invoice_id', 'id', 'id', 'cn_id');
    }
}


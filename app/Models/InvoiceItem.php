<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'invoice_id', 'cn_id', 'freight', 'fuel_charge', 'other_charges', 'total'
    ];

    protected $casts = [
        'freight' => 'decimal:2',
        'fuel_charge' => 'decimal:2',
        'other_charges' => 'decimal:2',
        'total' => 'decimal:2',
    ];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function consignmentNote()
    {
        return $this->belongsTo(ConsignmentNote::class, 'cn_id');
    }
}


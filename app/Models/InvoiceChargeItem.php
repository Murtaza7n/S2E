<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class InvoiceChargeItem extends Model
{
    use HasFactory;

    protected $fillable = ['invoice_id', 'invoice_charge_id', 'amount'];

    protected $casts = ['amount' => 'decimal:2'];

    public function invoice()
    {
        return $this->belongsTo(Invoice::class);
    }

    public function invoiceCharge()
    {
        return $this->belongsTo(InvoiceCharge::class);
    }
}


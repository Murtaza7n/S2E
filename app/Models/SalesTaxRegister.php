<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SalesTaxRegister extends Model
{
    use HasFactory;

    protected $fillable = [
        'tax_period', 'party_id', 'invoice_number', 'invoice_date',
        'ntn', 'strn', 'taxable_amount', 'tax_rate', 'tax_amount', 'type'
    ];

    protected $casts = [
        'tax_period' => 'date',
        'invoice_date' => 'date',
        'taxable_amount' => 'decimal:2',
        'tax_rate' => 'decimal:2',
        'tax_amount' => 'decimal:2',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}


<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PartyLedger extends Model
{
    use HasFactory;

    protected $fillable = [
        'party_id', 'transaction_date', 'reference_type', 'reference_id',
        'description', 'debit', 'credit', 'balance'
    ];

    protected $casts = [
        'transaction_date' => 'date',
        'debit' => 'decimal:2',
        'credit' => 'decimal:2',
        'balance' => 'decimal:2',
    ];

    public function party()
    {
        return $this->belongsTo(Party::class);
    }
}


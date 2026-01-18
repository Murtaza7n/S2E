<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Voucher extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'voucher_number', 'voucher_date', 'type', 'narration',
        'total_debit', 'total_credit', 'status',
        'posted_date', 'posted_by', 'cancelled_date', 'cancelled_by',
        'cancellation_reason', 'created_by'
    ];

    protected $casts = [
        'voucher_date' => 'date',
        'posted_date' => 'date',
        'cancelled_date' => 'date',
        'total_debit' => 'decimal:2',
        'total_credit' => 'decimal:2',
    ];

    public function entries()
    {
        return $this->hasMany(VoucherEntry::class);
    }

    public function creator()
    {
        return $this->belongsTo(User::class, 'created_by');
    }

    public function postedBy()
    {
        return $this->belongsTo(User::class, 'posted_by');
    }

    public function cancelledBy()
    {
        return $this->belongsTo(User::class, 'cancelled_by');
    }
}


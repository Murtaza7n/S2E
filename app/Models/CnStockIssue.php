<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CnStockIssue extends Model
{
    use HasFactory;

    protected $fillable = [
        'issue_number', 'issue_date', 'from_office_id', 'to_office_id',
        'from_cn_number', 'to_cn_number', 'quantity', 'remarks', 'issued_by'
    ];

    protected $casts = [
        'issue_date' => 'date',
    ];

    public function fromOffice()
    {
        return $this->belongsTo(CargoOffice::class, 'from_office_id');
    }

    public function toOffice()
    {
        return $this->belongsTo(CargoOffice::class, 'to_office_id');
    }

    public function issuer()
    {
        return $this->belongsTo(User::class, 'issued_by');
    }
}


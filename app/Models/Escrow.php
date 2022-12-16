<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Escrow extends Model
{
    use HasFactory;

    protected $fillable = [
        'depositor_name',
        'depositor_username',
        'depositor_email',
        'depositor_phone',
        'depositor_address',
        'depositor_country',
        'depositor_state',
        'depositor_city',
        'depositor_zip',
        'beneficiary_name',
        'beneficiary_username',
        'beneficiary_email',
        'beneficiary_phone',
        'beneficiary_address',
        'beneficiary_country',
        'beneficiary_state',
        'beneficiary_city',
        'beneficiary_zip',
        'amount',
        'currency',
        'status',
        'transaction_reference',
        'transaction_fee',
    ];

    //belongs to user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }
}

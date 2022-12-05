<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postproductrequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'purpose',
        'requirement_title',
        'qoutation_deadline',
        'terms_of_payment',
        'delivery_address',
        'delivery_city',
        'no_of_qoutations',
        'product_you_inquire',
        'attachment',
    ];
}

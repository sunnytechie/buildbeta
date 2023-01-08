<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Seller extends Model
{
    use HasFactory;

    protected $table = 'sellers';

    //has many products
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    //belongs to provider
    public function provider()
    {
        return $this->belongsTo('App\Models\Provider');
    }

    //belongs to user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //belongs to category
    public function category()
    {
        return $this->belongsTo('App\Models\Category');
    }
}

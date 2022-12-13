<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Provider extends Model
{
    use HasFactory;

    protected $table = 'providers';

    //has many products
    public function products()
    {
        return $this->hasMany('App\Models\Product');
    }

    //has many users
    public function users()
    {
        return $this->hasMany('App\Models\User');
    }

    //has many sellers
    public function sellers()
    {
        return $this->hasMany('App\Models\Seller');
    }
}

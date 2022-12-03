<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $table = 'products';

    public function category()
    {
        return $this->belongsTo(Category::class);
    }

    public function provider()
    {
        return $this->belongsTo(Provider::class);
    }

    //belongsTo seller
    public function seller()
    {
        return $this->belongsTo('App\Models\Seller');
    }

    //belongsTo user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //belongs to subcategory
    public function subcategory()
    {
        return $this->belongsTo('App\Models\Subcategory');
    }
}

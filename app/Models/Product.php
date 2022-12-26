<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Laravel\Scout\Searchable;

class Product extends Model
{
    use HasFactory, Searchable;

    protected $fillable = [
        'title',
        'description',
        'price',
        'image',
        'thumbnail',
        'thumbnail1',
        'thumbnail2',
        'thumbnail3',
        'thumbnail4',
        'thumbnail5',
        'category_id',
        'category_title',
        'subcategory_id',
        'subcategory_title',
        'provider_id',
        'publish',
        'user_id',
        'seller_id',
    ];

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

    /**
     * Get the indexable data array for the model.
     *
     * @return array
     */
    public function toSearchableArray()
    {
        $array = $this->toArray();
 
        // Customize the data array...

        //Use this to remove fields from the index
        unset($array['id, user_id, category_id, subcategory_id, provider_id, publish, created_at, updated_at']);
 
        return  [
            'title' => $this->title,
            'description' => $this->description,
            'category_title' => $this->category_title,
            'subcategory_title' => $this->subcategory_title,
        ];
    }
}

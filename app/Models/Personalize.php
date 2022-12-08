<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Personalize extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'designers',
        'contractors',
        'buildings',
        'services',
        'artisans',
        'wares',
        'properties',
        'others',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}

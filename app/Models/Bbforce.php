<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bbforce extends Model
{
    use HasFactory;

    protected $table = 'bbforce';

    //belongsTo user
    public function user()
    {
        return $this->belongsTo('App\Models\User');
    }

    //hasMany challenges
    public function challenges()
    {
        return $this->hasMany('App\Models\Challenge');
    }

}

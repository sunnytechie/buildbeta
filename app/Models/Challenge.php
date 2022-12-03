<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Challenge extends Model
{
    use HasFactory;

    protected $table = 'challenges';

    //belongsTo Bbforce
    public function bbforce()
    {
        return $this->belongsTo('App\Models\Bbforce');
    }
}

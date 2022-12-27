<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Slider extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'tagline',
        'image',
        'button_text',
        'button_link',
        'button_color',
        'button_text_color',
        'button_hover_color',
        'publish',
    ];
}

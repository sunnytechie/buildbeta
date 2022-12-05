<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Postdesignrequirement extends Model
{
    use HasFactory;

    protected $fillable = [
        'requirement_title',
        'design_service_type',
        'grade_of_decoration',
        'no_of_intensions',
        'submission_deadline',
        'project_location',
        'attachment',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PopulerCourseModel extends Model
{
    use HasFactory;
    protected $table = '_popular_courses';
    protected $primaryKey = 'Popular_id';
}

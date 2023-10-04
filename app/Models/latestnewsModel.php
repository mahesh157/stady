<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class latestnewsModel extends Model
{
    use HasFactory;
    protected $table = 'latestnews';
    protected $primaryKey = 'news_id';
}

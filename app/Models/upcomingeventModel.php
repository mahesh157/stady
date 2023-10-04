<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class upcomingeventModel extends Model
{
    use HasFactory;
    protected $table = 'upcoming_events';
    protected $primaryKey = 'event_id';
}

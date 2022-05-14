<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'course_id',
        'name',
        'day',
        'date',
        'start_time',
        'end_time',
        'link_session',
        'link_assignment',
    ];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Absen extends Model
{
    use HasFactory, SoftDeletes;

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Component extends Model
{
    use HasFactory, SoftDeletes;
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }
    public function score_detail()
    {
        return $this->hasMany(ScoreDetail::class);
    }
    public function announcement(){
        return $this->hasMany(User::class);
    }
    public function graduation()
    {
        return $this->hasMany(Graduation::class);
    }

}

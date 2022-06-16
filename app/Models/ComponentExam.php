<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentExam extends Model
{
    use HasFactory, SoftDeletes;

    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }
    public function score_exam()
    {
        return $this->hasMany(ScoreExam::class);
    }
    public function announcement(){
        return $this->hasMany(User::class);
    }
}

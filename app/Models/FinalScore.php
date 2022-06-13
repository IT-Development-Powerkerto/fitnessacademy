<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FinalScore extends Model
{
    use HasFactory;
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
    // public function score_detail()
    // {
    //     return $this->belongsTo(ScoreDetail::class, 'score_detail_id', 'id');
    // }
    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }
    public function exam()
    {
        return $this->belongsTo(Exam::class, 'exam_id', 'id');
    }

}

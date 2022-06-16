<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScoreExam extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'score'
    ];
    // protected $guarded = [
    //     'id'

    // ];

    public function component_exam()
    {
        return $this->belongsTo(ComponentExam::class, 'component_exam_id', 'id');
    }
    // public function final_score()
    // {
    //     return $this->hasMany(FinalScore::class);
    // }
    public function user()
    {
        return $this->belongsTo(User::class, 'user_id', 'id');
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ScoreSession extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'score'
    ];
    // protected $guarded = [
    //     'id'

    // ];

    public function component_session()
    {
        return $this->belongsTo(ComponentSession::class, 'component_session_id', 'id');
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

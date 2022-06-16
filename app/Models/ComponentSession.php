<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ComponentSession extends Model
{
    use HasFactory, SoftDeletes;

    public function session()
    {
        return $this->belongsTo(Session::class, 'session_id', 'id');
    }
    public function score_session()
    {
        return $this->hasMany(ScoreSession::class);
    }
    public function announcement(){
        return $this->hasMany(User::class);
    }
}

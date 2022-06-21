<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */

    // protected $table = 'users';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'name',
        'email',
        'password',
        'gender',
        'age',
        'phone',
        'nik',
        'education',
        'work',
        'address',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function role(){
        return $this->belongsTo(Role::class);
    }

    /**
     * Get all of the course for the User
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function course()
    {
        return $this->hasMany(Course::class, 'trainer_id', 'id');
    }

    public function payment()
    {
        return $this->hasMany(Payment::class);
    }

    public function absen()
    {
        return $this->hasMany(Absen::class);
    }
    public function trainer()
    {
        return $this->hasOne(Trainer::class);
    }


    // public function final_score()
    // {
    //     return $this->hasMany(FinalScore::class);
    // }

    // public function score_detail()
    // {
    //     return $this->hasMany(ScoreDetail::class);
    // }
    public function final_score_exam()
    {
        return $this->hasMany(FinalScoreExam::class);
    }
    public function final_score_session()
    {
        return $this->hasMany(FinalScoreSession::class);
    }

    public function score_exam()
    {
        return $this->hasMany(ScoreExam::class);
    }
    public function score_session()
    {
        return $this->hasMany(ScoreSession::class);
    }
}

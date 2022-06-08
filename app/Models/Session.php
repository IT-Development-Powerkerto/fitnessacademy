<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Session extends Model
{
    use HasFactory;
    protected $table = 'sessions';
    // protected $primaryKey = 'id';

    // protected $fillable = [
    //     'course_id',
    //     'name',
    //     'day',
    //     'date_session',
    //     'time_session',
    //     // 'start_time',
    //     // 'end_time',
    //     // 'schedule',
    //     'image',
    //     'link_session',
    //     'link_assignment',
    // ];

    /**
     * Get the user that owns the Session
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function course()
    {
        return $this->belongsTo(Course::class);
    }

    public function materi()
    {
        return $this->hasOne(Materi::class);
    }

    public function absen()
    {
        return $this->hasMany(Absen::class);
    }
    public function component()
    {
        return $this->hasMany(Component::class);
    }
    public function final_score()
    {
        return $this->hasMany(FinalScore::class);
    }
}

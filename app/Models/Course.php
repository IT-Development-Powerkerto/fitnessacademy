<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Course extends Model
{
    use HasFactory;
    protected $table = 'courses';
    // protected $primaryKey = 'id';

    protected $fillable = [
        'course_name',
        'trainer_id',
        'level',
        'schedule',
        'price',
        'bird_price',
        'start_date',
        'end_date',
    ];

    /**
     * Get the user associated with the Course
     *
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function session()
    {
        return $this->hasOne(Session::class);
    }

    public function exam()
    {
        return $this->hasMany(Exam::class);
    }
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Exam extends Model
{
    use HasFactory;
    protected $table = 'exams';
    // protected $primaryKey = 'id';

    // protected $fillable = [
    //     'course_id',
    //     'name',
    //     'date',
    //     'time',
    //     'condition',
    //     'link',
    // ];

    public function course()
    {
        return $this->belongsTo(Course::class);
    }
}
<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExamController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // return view('trainer.addExam');
    }
    public function addExam()
    {
        return view('trainer.addExam');
    }
    public function editExam()
    {
        return view('trainer.editExam');
    }
    public function detailExam()
    {
        return view('trainer.detailExam');
    }
    public function setScore()
    {
        return view('trainer.setScoreExam');
    }
    public function addScore()
    {
        return view('trainer.addScoreExam');
    }
}

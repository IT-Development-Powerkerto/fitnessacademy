<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\ScoreDetail;
use App\Models\Component;
use App\Models\Exam;
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
    public function addExam($id)
    {
        $course_id = Course::find($id);

        return view('trainer.addExam', compact('course_id'))->with('success', 'Create Course Success!');
    }
    public function editExam()
    {
        return view('trainer.editExam');
    }
    public function detailExam($id)
    {
        $exam = Exam::find($id);
        return view('trainer.detailExam', compact('exam'));
    }
    public function setScore()
    {
        return view('trainer.setScoreExam');
    }
    public function addScore()
    {
        return view('trainer.addScoreExam');
    }

    public function store(Request $request)
    {
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'course_id' => '',
            'name' => 'required',
            'date_exam' => '',
            'start_time'=>'',
            'finish_time'=>'',
            'link' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $exam = new Exam();
        $exam->course_id = $request->course_id;
        $exam->name = $validated['name'];
        $exam->date_exam = Carbon::create($request->date_session)->toDateString();
        $exam->start_time = $request->start_time;
        $exam->finish_time = $request->finish_time;
        $exam->link = $request->link;

        $exam->save();

        $course_id = $request->course_id;
        // return $session;

        return redirect()->route('course.show',['course'=>$course_id]);
    }

    public function scoreExam(Request $request)
    {
        //

        $validator = Validator::make($request->all(), [

            'session_id' => '',
            'komp' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();
        foreach($request->komp as $value){
            $comp = new Component();
            $comp->exam_id = $request->exam_id;
            $comp->component_name = $value['component_name'];


            $comp->save();

            $score = new ScoreDetail();
            $score->component_id = $comp->id;
            $score->score = '0';

            $score->save();
        }
        $comp->save();
        $score->save();



        $exam_id = $request->exam_id;
        // return $session;

        return redirect()->route('detailSession.show', ['detailSession'=>$exam_id]);
    }
}

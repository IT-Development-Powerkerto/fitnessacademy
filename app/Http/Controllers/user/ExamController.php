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
use App\Models\Payment;
use App\Models\FinalScore;
use App\Models\Absen;
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
    public function presenceExam($id)
    {
        //
        $exam = Exam::find($id);

        $s = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id, $exam){
            $query->where('course_id',$exam->course_id);

        }, 'user' => function($query) use($id){
            $query->where('role_id', 1)->whereDoesntHave('absen.exam', function($q) use($id){
                $q->where('id', $id);
            });

        }])->get();

        $exam_id = $id;

        $a = Absen::where('session_id', $exam->id)->get();

        return view('trainer.presenceExam', compact('exam', 's', 'exam_id', 'a'));

    }

    public function absenExam(Request $request)
    {
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'exam_id' => '',
            // 'status' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();
        foreach($request->user_id as $key=>$value){
            $absen = new Absen();
            $absen->exam_id = $request->exam_id;
            $absen->user_id = $value;
            $absen->status = $request->status[$key];

            $absen->save();



        }



        $exam_id = $request->exam_id;
        // return $session;

        return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);
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
        $c = Component::where('exam_id', $exam->id)->get();

        $sde = ScoreDetail::with('component')->get()->where('component.exam_id', $id);
        $a = Absen::where('exam_id', $exam->id)->get();
        return view('trainer.detailExam', compact('exam', 'c', 'sde', 'a'));
    }
    public function setScore($id)
    {
        $exam = Exam::find($id);
        $exam_id = $id;

        return view('trainer.setScoreExam', compact('exam', 'exam_id'));
    }
    public function addScore($id)
    {
        $exam = Exam::find($id);
        $co = Component::where('exam_id', $exam->id)->get();
        $s = ScoreDetail::with('component')->get();


        $u = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id){
            $query->where('course_id', $id);

        }, 'user' => function($query) use($id){
            $query->where('role_id', 1)->whereDoesntHave('score_detail.component.exam', function($q) use($id){
                $q->where('id', $id);
            });

        }])->get();
        $exam_id = $id;
        return view('trainer.addScoreExam', compact('exam', 'co', 'u', 'exam_id'));
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

            'exam_id' => '',
            'komp' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();
        foreach($request->komp as $value){
            $compEx = new Component();
            $compEx->exam_id = $request->exam_id;
            $compEx->component_name = $value['component_name'];


            $compEx->save();

            $score = new ScoreDetail();
            $score->component_id = $compEx->id;
            $score->score = '0';

            $score->save();
        }
        $compEx->save();
        $score->save();



        $exam_id = $request->exam_id;
        // return $session;

        return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);
    }

    public function addScoreExam (Request $request)
    {

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'score_detail_id' => '',
            // 'status' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $totalComponent = 0;
        $sumScores = 0;

        // $data = Carbon::now();

        foreach ($request->score_detail_id as $user_id=>$user_score) {
            $totalComponent = collect($user_score)->count();
            $sumScores = collect($user_score)->sum();

            foreach ($user_score as $comp_id => $score) {
                ScoreDetail::insert([
                   'component_id' => $comp_id,
                   'user_id' => $user_id,
                   'score' => $score
                ]);
            }

            $finalScore = FinalScore::insert([
                'exam_id'=>$request->exam_id,
                'user_id' => $user_id,
                'score_final' => $sumScores / $totalComponent,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),

            ]);
        }


        $exam_id = $request->exam_id;
        // return $session;

        return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);

    }
}

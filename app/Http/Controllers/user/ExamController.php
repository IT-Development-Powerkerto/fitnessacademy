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
use App\Models\Graduation;
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
    public function presenceExam($course, $id)
    {
        //
        // return $course;
        $exam = Exam::whereId($id)->first();
        $course_id = $course;

        $s = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id, $exam){
            $query->where('course_id',$exam->course_id);

        }, 'user' => function($query) use($id){
            $query->where('role_id', 1)->whereDoesntHave('absen.exam', function($q) use($id){
                $q->where('id', $id);
            });

        }])->get();
    // }, 'user' => function($query) use($id){
    //     $query->where('role_id', 1)->whereDoesntHave('absen.exam', function($q) use($id){
    //         $q->where('exam_id', $id);
    //     });

    // }])->get();
        $exam_id = $id;

        $a = Absen::where('session_id', $exam->id)->get();

        return view('trainer.presenceExam', compact('exam', 's', 'exam_id', 'a', 'course_id'));

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



        // $exam_id = $request->exam_id;
        // return $session;
        $exam_id = $request->exam_id;
        $course_id = Exam::whereId($exam_id)->value('course_id');
        // return $session;

        // return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);
        return redirect()->route('detailExam.detailExam', ['course'=>$course_id, 'id'=>$exam_id]);
        // return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);
    }

    public function addExam($id)
    {
        $course_id = Course::find($id);

        return view('trainer.addExam', compact('course_id'))->with('success', 'Create Course Success!');
    }
    public function editExam($course, $id)
    {
        $exam = Exam::whereId($id)->first();
        $course_id = $course;
        return view('trainer.editExam', compact('exam', 'course_id'));
    }
    public function detailExam($course, $id)
    {

        $exam = Exam::find($id);
        $c = Component::where('exam_id', $exam->id)->get();
        $course = Course::whereId($course)->first();
        $sde = ScoreDetail::with('component')->get()->where('component.exam_id', $id);
        // dd($course);
        $a = Absen::where('exam_id', $exam->id)->get();
        return view('trainer.detailExam', compact('exam', 'c', 'sde', 'a', 'course'));
    }
    public function setScore($course, $id)
    {
        $exam = Exam::whereId($id)->first();
        $course_id = $course;
        $exam_id = $id;

        return view('trainer.setScoreExam', compact('exam', 'exam_id', 'course'));
    }
    public function addScore($course ,$id)
    {
        $exam = Exam::find($id);
        $course_id = $course;
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
        return view('trainer.addScoreExam', compact('exam', 'co', 'u', 'exam_id', 'course_id'));
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

    public function update(Request $request, $id)
    {
        //

        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'course_id' => '',
            'name' => '',
            'date_exam' => '',
            'start_time'=>'',
            'finish_time'=>'',
            'link' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $exam = Exam::find($id);
        $exam->course_id = $request->course_id;
        $exam->name = $request->name;
        $exam->date_exam = Carbon::create($request->date_session)->toDateString();
        $exam->start_time = $request->start_time;
        $exam->finish_time = $request->finish_time;
        $exam->link = $request->link;

        $exam->save();

        $course_id = $request->course_id;
        $exam_id = $request->exam_id;
        // return $session;

        return redirect()->route('detailExam.detailExam', ['course'=>$course_id, 'id'=>$id]);
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
        $grad = new Graduation();
        $grad->exam_id = $request->exam_id;
        $grad->point_range_min = $request->point_range_min;
        $grad->point_range_max = $request->point_range_max;
        $grad->graduation_range_min = $request->graduation_range_min;
        $grad->graduation_range_max = $request->graduation_range_max;

        $grad->save();
        // $grad->save();




        $exam_id = $request->exam_id;
        $id = $request->id;
        $course_id = $request->course_id;
        // $exam = Exam::whereId($id)->first();
        $course_id = Exam::whereId($exam_id)->value('course_id');
        // $exam = $id;
        // return $session;

        return redirect()->route('detailExam.detailExam', ['course'=>$course_id, 'id'=>$exam_id]);
        // return redirect()->route('detailExam.detailExam', ['course'=>$course_id, 'id'=>$exam_id]);
        // return redirect(url()->previous());
        // return view('trainer.detailExam', [$course, $exam_id]);
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
            $graduation = Graduation::where('exam_id', $request->exam_id)->first();
            $hasil_score =  $sumScores / $totalComponent;


            if($hasil_score >= $graduation->graduation_range_min){
                $status = 'Graduated';
            }else{
                $status = 'Havent Passed Yet';
            }

            $finalScore = FinalScore::insert([
                'exam_id'=>$request->exam_id,
                'user_id' => $user_id,
                'score_final' => $hasil_score,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),
                'status' => $status,

            ]);
        }


        $exam_id = $request->exam_id;
        $course_id = Exam::whereId($exam_id)->value('course_id');
        // return $session;

        // return redirect()->route('detailExam.detailExam', ['id'=>$exam_id]);
        return redirect()->route('detailExam.detailExam', ['course'=>$course_id, 'id'=>$exam_id]);

    }
}

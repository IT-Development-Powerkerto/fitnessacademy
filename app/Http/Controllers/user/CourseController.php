<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;use Illuminate\Validation\Rule;
// use Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\User;
use App\Models\Session;
use App\Models\Exam;
use App\Models\Payment;
use App\Models\FinalScoreExam;
use App\Models\FinalScoreSession;
use App\Models\Materi;
use PHPUnit\Framework\Constraint\Count;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $x = auth()->user();
        if($x->role_id == 1){
            return view('user.detailCourse');
        }
        else if($x->role_id == 2){
            return view('trainer.detailCourse');
        }
        // else if($x->role_id == 3){
        //     return view('admin.overviewCourse');
        // }
    }
    public function courseApproval($payment_id)
    {
        $payment = Payment::whereId($payment_id)->with([
            'payment_detail.course', 'user'])->first();
        // return $payment;
        return view('admin.overviewCourse', compact('payment'));
    }

    public function detailOvervieweCourse($id)
    {
        $course = Course::findOrFail($id);
        $sessions = Session::where('course_id', $course->id)->get();
        $exams = Exam::where('course_id', $course->id)->get();
        return view('admin.detailOverviewCourse', compact('course', 'sessions', 'exams'));
    }

    public function buyCourse()
    {
        $x = auth()->user();
        $course = Course::all();
        if($x->role_id == 1){
            return view('user.addCourse', compact('course'));
        }
        // else if($x->role_id == 2){
        //     return view('trainer.addCourse');
        // }
    }
    // public function addCourse()
    // {
    //     return view('trainer.addCourse');

    // }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('trainer.addCourse');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'course_name' => 'required',
            'level'       => 'required',
            'price'       => '',
            'bird_price'  => '',
            'start_date'       => '',
            'end_date'         => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $course = new Course();
        $course->name       = $validated['course_name'];
        $course->trainer_id = auth()->user()->id;
        $course->level      = $validated['level'];
        $course->schedule   = $request->values;
        $course->price      = $request->price == null ? 0 : str_replace('.','',$request->price);
        $course->bird_price = $request->bird_price == null ? 0 : str_replace('.','',$request->bird_price);
        $course->start_date = $request->start_date ?? null;
        $course->end_date   = $request->end_date ?? null;
        $course->save();

        return redirect('/dashboard')->with('success', 'Create Course Success!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $x = auth()->user();
        $course = Course::whereId($id)->first();
        $course_id = $id;
        $user = User::all();
        // $sessions = Session::where('course_id', $course->id)->get();

        $sessions = Session::where('course_id', $course->id)->with(['final_score_session' => function($query) use($id){
            $query->where('session_id', $id);
        }])->get();
        $exams = Exam::where('course_id', $course->id)->get();


        $s = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id){
            $query->where('course_id', $id);

        }])->get()->pluck('user_id')->flatten();

        $c = User::find($s);
        $fs = FinalScoreExam::all();

        $ses = Session::whereId($id)->first();
        $sf = FinalScoreSession::all();

        // $ma = Materi::where('session_id', $ses->id)->get();


        if($x->role_id == 1){
            return view('user.detailCourse', compact('user', 'course', 'course_id', 'sessions', 'exams', 'c', 'fs', 'sf'));
        }
        else if($x->role_id == 2){
            return view('trainer.detailCourse', compact('user', 'course', 'course_id', 'sessions', 'exams', 'c'));
        }
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit()
    {
        return view('trainer.editCourse');
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }

    public function getCourse(){
        $course = Course::all();
        return response()->json(['course'=> $course], 201);

    }
}

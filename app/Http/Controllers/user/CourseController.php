<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use App\Models\Course;
use App\Models\User;
use App\Models\Session;
use App\Models\Exam;
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
        else if($x->role_id == 3){
            return view('admin.overviewCourse');
        }
    }

    public function detailOvervieweCourse($id)
    {
        $course = Course::findOrFail($id);
        $sessions = Session::where('course_id', $course->id)->get();
        $exams = Exam::where('course_id', $course->id)->get();
        return view('admin.detailOverviewCourse', compact('course', 'sessions', 'exams'));
    }

    public function addCourse()
    {
        $x = auth()->user();
        $course = Course::all();
        if($x->role_id == 1){
            return view('user.addCourse', compact('course'));
        }
        else if($x->role_id == 2){
            return view('trainer.addCourse');
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
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
            'price'       => 'required',
            'bird_price'  => 'required',
            'start'       => 'required',
            'end'         => 'required',
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
        $course->price      = $validated['price'];
        $course->bird_price = $validated['bird_price'];
        $course->start_date = $validated['start'];
        $course->end_date   = $validated['end'];
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
        $course = Course::findOrFail($id);
        $course_id = $id;
        $user = User::all();
        $sessions = Session::where('course_id', $course->id)->get();
        $exams = Exam::where('course_id', $course->id)->get();
        if($x->role_id == 1){
            return view('user.detailCourse');
        }
        else if($x->role_id == 2){
            return view('trainer.detailCourse', compact('user', 'course', 'course_id', 'sessions', 'exams'));
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

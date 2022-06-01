<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Materi;
use App\Models\Payment;
use App\Models\Session;
use App\Models\Absen;
use App\Models\PaymentDetail;
use App\Models\User;
use App\Models\Component;

class SessionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('trainer.detailSession');
    }

    public function addSession($id)
    {
        $course_id = Course::find($id);

        return view('trainer.addSession', compact('course_id'));
    }

    public function editSession()
    {
        return view('trainer.editSession');
    }

    public function setScore()
    {
        return view('trainer.setScoreSession');
    }
    public function addScore()
    {
        return view('trainer.addScoreSession');
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
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'course_id' => '',
            'name' => 'required',
            'day' => '',
            'date_session' => '',
            'start_time'=>'',
            'finish_time'=>'',

            'group_a'=>'',

            'link_session' => '',
            'link_assignment' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $session = new Session();
        $session->course_id = $request->course_id;
        $session->name = $validated['name'];
        $session->day = $request->day;
        $session->date_session = Carbon::create($request->date_session)->toDateString();

        $session->start_time = $request->start_time;
        $session->finish_time = $request->finish_time;

        $session->link_session  = $request->link_session;
        $session->link_assignment = $request->link_assignmen;

        $session->save();

        foreach ($request->group_a as $value) {
            $materi = new Materi();
            $materi->session_id = $session->id;
            $materi->file =$value['file'];

            $materi->save();
        }
        $materi->save();

        $course_id = $request->course_id;
        // return $session;


        return redirect()->route('course.show',['course'=>$course_id]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
        $session = Session::find($id);


        $a = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id){
            $query->where('course_id', $id);

        }])->get()->pluck('user_id')->flatten();

        $s = User::find($a);
        // $s = Payment::where('status', 'success')->get();
        $session_id = $id;

        $a = Absen::where('session_id', $session->id)->get();

        return view('trainer.detailSession', compact('session', 's', 'session_id', 'a'));

    }


    public function absen(Request $request)
    {
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'session_id' => '',
            'status' => '',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();
        foreach($request->user_id as $key=>$value){
            $absen = new Absen();
            $absen->session_id = $request->session_id;
            $absen->user_id = $value;
            $absen->status = $request->status[$key];

            $absen->save();

        }


        $session_id = $request->session_id;
        // return $session;

        return redirect()->route('detailSession.show', ['detailSession'=>$session_id]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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

    public function presence($id)
    {
        //
        $session = Session::find($id);


        // $a = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id){
        //     // $query->where('course_id', $id);
        //     $query->where('course_id', $id);

        // }])->get()->pluck('user_id')->flatten();

        // $s = User::find($a);

        $s = PaymentDetail::with(['payment'=> function($query) use($id){
            $query->where('status', 'success');

        }])->where('course_id', $session->course_id)->get();

        // $successCourse = Payment::where('user_id', Auth::user()->id)
        // ->where('status', 'success')
        // ->with(['payment_detail'=>function($query){
        //     $query->with('course');
        // }])
        // ->get()
        // ->map(function($value) {
        //     return $value->payment_detail->pluck('course_id');
        // })->flatten();

        // $s = Course::find($successCourse);
        // $s = Payment::where('status', 'success')->get();
        $session_id = $id;

        $a = Absen::where('session_id', $session->id)->get();

        return view('trainer.presence', compact('session', 's', 'session_id', 'a'));

    }

    public function componnent($id)
    {
        //
        $session = Session::find($id);


        $session_id = $id;


        return view('trainer.setScoreSession', compact('session','session_id'));
        // return view('trainer.presence', compact('session','session_id'));

    }

    public function getAbsen(){
        $s = Payment::where('status', 'success')->get();

        return response()->json(['student'=> $s], 201);

    }

    public function scoreComponent(Request $request)
    {
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
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
            $comp->session_id = $request->session_id;
            $comp->component_name = $value['component_name'];
            $comp->score = $value['score'];

            $comp->save();

        }
        $comp->save();


        $session_id = $request->session_id;
        // return $session;

        return redirect()->route('detailSession.show', ['detailSession'=>$session_id]);
    }




}

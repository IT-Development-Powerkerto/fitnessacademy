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

use App\Models\ScoreDetail;
use App\Models\FinalScore;

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

    // public function addScore()
    // {
    //     return view('trainer.addScoreSession');
    // }
    public function addScore($id)
    {
        $session = Session::find($id);
        $component = Component::where('session_id', $session->id)->get();
        $s = ScoreDetail::with('component')->get();


        $u = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id){
            $query->where('course_id', $id);

        }, 'user' => function($query) use($id){
            $query->where('role_id', 1)->whereDoesntHave('score_detail.component.session', function($q) use($id){
                $q->where('id', $id);
            });
            // $query->where('role_id', 1)->doesntHave('score_detail');

        }])->get();


        $session_id = $id;

        return view('trainer.addScoreSession',  compact('session', 'component', 's', 'u', 'session_id'));
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
        $session->link_assignment = $request->link_assignment;

        $session->save();


        foreach ($request->group_a as $value) {
            foreach ($value as $v) {
                // $pdf = $v;
                $originalFileName = $v->getClientOriginalName();
                $namaFile = 'Materi-'.$originalFileName;
                $extFile = $v->getClientOriginalExtension();
                $extension = time().'.'.$extFile;
                $path = $v->move('public/assets/file/materi', $namaFile);

                $materi = new Materi();
                $materi->session_id = $session->id;
                $materi->file = $path;
                // dd($v);

                // dd($namaFile, $path, $materi);
                $materi->save();
            }
        }
        // $materi->save();

        $course_id = $request->course_id;

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
        $c = Component::where('session_id', $session->id)->get();

        $fs = FinalScore::where('session_id', $session->id)->with(['user'=> function($query){
            $query->where('role_id', 1);
        }])->get();
        $sd = ScoreDetail::with('component')->get()->where('component.session_id', $id);

        $m = Materi::where('session_id', $session->id)->get();




        return view('trainer.detailSession', compact('session', 's', 'session_id', 'a',
        'c','sd', 'fs', 'm'
        ));

    }


    public function absen(Request $request)
    {
        //
        // dd(Carbon::create($request->date_session)->toDateString());
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'user_id' => '',
            'session_id' => '',
            // 'status' => '',
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

        $s = Payment::where('status', 'success')->with(['payment_detail' => function($query) use($id, $session){
            $query->where('course_id',$session->course_id);

        }, 'user' => function($query){

            $query->where('role_id', 1);
        }])->get();

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

    }

    public function getAbsen(){
        $s = Payment::where('status', 'success')->get();

        return response()->json(['student'=> $s], 201);

    }

    public function scoreComponent(Request $request)
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
            $comp->session_id = $request->session_id;
            $comp->component_name = $value['component_name'];


            $comp->save();

            $score = new ScoreDetail();
            $score->component_id = $comp->id;
            $score->score = '0';

            $score->save();
        }
        $comp->save();
        $score->save();



        $session_id = $request->session_id;
        // return $session;

        return redirect()->route('detailSession.show', ['detailSession'=>$session_id]);
    }


    public function scoreAdd (Request $request)
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
                'session_id'=>$request->session_id,
                'user_id' => $user_id,
                'score_final' => $sumScores / $totalComponent,
                'created_at' => Carbon::now()->toDateTimeString(),
                'updated_at' => Carbon::now()->toDateTimeString(),

            ]);
        }


        $session_id = $request->session_id;
        // return $session;

        return redirect()->route('detailSession.show', ['detailSession'=>$session_id]);

    }




}

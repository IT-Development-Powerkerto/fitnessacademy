<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Course;
use App\Models\Exam;
use App\Models\Materi;
use App\Models\Session;

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
            'time_session' => '',
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
        $session->time_session = $request->time_session;

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
}

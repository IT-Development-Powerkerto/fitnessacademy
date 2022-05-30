<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Course;
use App\Models\PaymentDetail;
use App\Models\Payment;
use Carbon\Carbon;

class DashboardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $today = Carbon::now()->isoFormat('YYYY-MM-DD');
        $day = Carbon::now()->isoFormat('dddd');
        $user = User::all();
        $trainer = User::whereIn('status', ['inactive', 'active'])->whereIn('role_id', [1,2])->get();
        // $student = User::where('role_id', 1)->get();
        $student = Payment::where('status', 'success')->get();
        $courses = Course::withCount(['payment' => function($query) {
            $query->where('status', 'success');
        }])
        ->get();


        // if($trainer->status == 'inactive'){
        //     $trainer = User::all();

        // }else if($trainer->status == 'active'){
        //     $trainer = User::where('role', 2)->get();

        // }
        // $c = Course::with(['payment' => function($query) {
        //     $query->where('status', 'success');
        //     $query->where('user_id', Auth::user()->id);
        // }])
        // ->get();
        $successCourse = Payment::where('user_id', Auth::user()->id)
        ->where('status', 'success')
        ->with(['payment_detail'=>function($query){
            $query->with('course');
        }])
        ->get()
        ->map(function($value) {
            return $value->payment_detail->pluck('course_id');
        })->flatten();

        $c = Course::find($successCourse);

        // $c = Auth::user()->payment->where('status', 'success');

        // dd($c);
        $p = Payment::where('status', 'pending')->get();


        $x = auth()->user();
        if($x->role_id == 1){

            return view('user.dashboard', compact('c'));
        }
        else if($x->role_id == 2){
            $course = Course::where('trainer_id', auth()->user()->id)->get();
            // dd($course);
            // $today_course = Course::where('trainer_id', auth()->user()->id)->whereBetween('start_date', [$today])->get();
            return view('trainer.dashboard', compact('today', 'day', 'user', 'course'));
        }
        else if($x->role_id == 3) {
            return view('admin.dashboard', compact('trainer', 'student', 'courses', 'p'));
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
        //
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


    public function aproveUser(Request $request, $id)
    {


        $user = User::find($id);

        $user->status = 'active'; //pending, waiting, success

        $user->save();

        return redirect()->back();
    }



    public function rejectUser(Request $request, $id)
    {
        $user = User::find($id);

        $user->status = 'reject'; //pending, waiting, success

        $user->save();

        return redirect()->back();
    }
}

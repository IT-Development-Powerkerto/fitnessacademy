<?php

namespace App\Http\Controllers;

use App\Mail\AdminMail;
use App\Mail\ClientMail;
use Illuminate\Http\Request;
use App\Models\User;
use App\Models\Role;
use App\Models\Trainer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class LoginRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $role = Role::where('id', '!=', 3)->get();
        $user = User::all();
        return view('register', compact('role', 'user'));
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
            // 'role_id' => 'required',
            'name' => 'required',
            'email' => 'required|unique:users|email:rfc,dns',
            'password' => 'required|min:8',
            'gender' => 'required',
            'age' => 'required',
            'phone' => 'required',
            'nik' => 'required',
            'education' => 'required',
            'work' => 'required',
            'address' => 'required',
            'image' => '',
        ]);
        if($validator->fails()){
            // return back()->with('error','Error! User not been Added')->withInput()->withErrors($validator);
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        // if(substr(trim($validated['phone']), 0, 1)=='0'){
        //     $phone = '62'.substr(trim($validated['phone']), 1);
        // } else{
        //     $phone = $validated['phone'];
        // }
        $user = new User();
        $user->role_id = $request->role_id;
        $user->name = $request->name;
        $user->email = $validated['email'];
        $user->password = Hash::make($validated['password']);
        $user->gender = $validated['gender'];
        $user->age = $validated['age'];
        $user->phone = $validated['phone'];
        $user->nik = $validated['nik'];
        $user->education = $validated['education'];
        $user->work = $validated['work'];
        $user->address = $validated['address'];
        // $user->image = $request->image;

        if($request->role_id == 1)
        {
            // $user->status = 'active'; //active, inactive, reject
            $user->save();
        }elseif ($request->role_id == 2)
        {
            // $user->status = 'inactive'; //active, inactive, reject
            if ($request->hasFile('resume')) {
                $extFile = $request->resume->getClientOriginalExtension();
                $namaFile = 'resume-'.time().".".$extFile;
                $path = $request->resume->move('public/assets/file/resume',$namaFile);
                // File::delete($pt->user->image);
                // return 'ok'
            }
            $user->save();
            Trainer::create([
                'user_id' => $user->id,
                'resume' => $path
            ]);
            // $user->trainer()->associate();
        }


        // $user->remember_token = Str::random(10);
        // $user->created_at = Carbon::now()->toDateTimeString();
        // $user->updated_at = Carbon::now()->toDateTimeString();


        // $user->trainer->create([
        //     'user_id' => $this->id
        // ]);
        $admin_email = User::where('role_id', 3)->select('email')->first();
        Mail::to($admin_email)->send(new AdminMail());
        Mail::to($validated['email'])->send(new ClientMail());

        return redirect('/registerSuccess')->with('success', 'Register Success!');
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

    public function registerSuccess(){
        return view("registerSuccess");
    }

    public function login(Request $request)
    {
        $credentials = $request->validate([
            'email' => 'required',
            'password' => 'required',
        ]);

        // $data = $request->input();
        // // dd($data);

        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();

            return redirect('/dashboard');
        }

        return back()->withErrors([
            'name' => 'The provided credentials do not match our records.',
        ]);
    }

    public function logout(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return redirect('/');
    }
}

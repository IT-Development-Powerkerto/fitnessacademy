<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Mail\ForgotPasswordMail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Str;

class UserProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $my = User::findOrFail(auth()->user()->id);
        return view('user.userProfile', compact('my'));
    }

    public function overviewStudent()
    {
        return view('admin.overviewStudent');
    }

    public function editUser()
    {
        $my = User::findOrFail(auth()->user()->id);
        return view("user.editUser", compact('my'));
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
        // dd($request->all());
        $validator = Validator::make($request->all(), [
            'name' => 'required',
            'email' => ['required', 'email', Rule::unique('users', 'email')->ignore($id, 'id')],
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
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $validated = $validator->validate();

        $user = User::find($id);
        $user->name = $validated['name'];
        $user->email = $validated['email'];
        $user->gender = $validated['gender'];
        $user->age = $validated['age'];
        $user->phone = $validated['phone'];
        $user->nik = $validated['nik'];
        $user->education = $validated['education'];
        $user->work = $validated['work'];
        $user->address = $validated['address'];
        if ($request->hasFile('image')) {
            $extFile = $request->image->getClientOriginalExtension();
            $namaFile = 'user-'.time().".".$extFile;
            $path = $request->image->move('public/assets/img/user/', $namaFile);
            $user->image = $path;
        }
        $user->updated_at = Carbon::now()->toDateTimeString();
        $user->save();

        return redirect('/userProfile')->with('success', 'Edit Success!');
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

    public function view($id)
    {
        // $trainer = User::findOrFail($id) ?? Auth::user()->id;
        return view('user.userProfile');

    }

    public function trainerMy($id)
    {
        $trainer = User::findOrFail($id);
        return view('admin.overviewTrainer', compact('trainer'));

    }

    public function NewPassword(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'current_password' => 'required',
            'new_password' => 'required',
        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }else{
            $user = Auth::user();
            if(Hash::check($request->current_password, $user->password)){
                $user->password = Hash::make($request->new_password);
                $user->save();
            }
        }


        return redirect()->back();

    }
    public function forgotPassword(Request $request)
    {
        $email = $request->email;
        $validator = Validator::make($request->all(), [
            'email' => 'required|email:rfc,dns',
        ]);
        if ($validator->fails()) {
            return back()->with('error', $validator->errors());
        }
        $user = User::where('email', $email)->first();
        if($user == null){
            return back();
        }else{
            $new_password = Str::upper(Str::random(8));
            $user->update([
                'password' => Hash::make($new_password)
            ]);
            $details = [
                'password' => $new_password,
            ];
            Mail::to($email)->send(new ForgotPasswordMail($details));
            return back()->with('success', 'Email has been send');
        }
    }
}

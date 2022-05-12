<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Validation\Rule;
use Validator;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;

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
        return view("user.userProfile", compact('my'));
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
}

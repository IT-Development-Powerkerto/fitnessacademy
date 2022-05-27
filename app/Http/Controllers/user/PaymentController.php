<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use App\Models\Payment;
use App\Models\PaymentDetail;
use App\Models\Course;

class PaymentController extends Controller
{
    //
    public function index($id)
    {
        $payment = Payment::findOrFail($id);
        // dd($payment);

        return view('user.payment', compact('payment'));
    }

    public function store(Request $request)
    {
        // dd($request);
        // $table->foreignId('user_id');
        // $table->string('order_id');
        // $table->dateTime('order_date');
        // $table->string('proof');
        // $table->string('status');
        $validator = Validator::make($request->all(), [
            // 'user_id' =>'',
            'course_id' =>'',
            // 'payment_id' =>'',

        ]);
        if($validator->fails()){
            return Redirect::back()->with('error_code', 5)->withInput()->withErrors($validator);
        }
        $date = Carbon::now();

        $courses = Course::find($request->course_id);

        $totalPrice = $courses->sum('price');

        $payment = new Payment();
        $payment->user_id = auth()->user()->id;
        $payment->order_id = "FA/ORD/".$date->timestamp;
        $payment->order_date = $date;
        $payment->status = 'waiting'; //pending, waiting, success
        $payment->total_price = $totalPrice;
        $payment->proof = $request->proof;
        $payment->save();

        foreach(collect($request->course_id) as $id) {
            $pd = new PaymentDetail();
            $pd->payment_id = $payment->id;
            $pd->course_id = $id;
            $pd->save();
        }


        // return redirect()->route('user.payment');
        // return redirect('/payment')->with('success', 'Create Course Success!');
        return redirect()->route('payment.index',['id'=>$payment->id]);
    }

    public function uploadImage(Request $request, $id)
    {

        $validator = Validator::make($request->all(), [
            // 'user_id' =>'',
            'proof' =>'',
            // 'payment_id' =>'',

        ]);
        $payment = Payment::find($id);
        // $payment->user_id = auth()->user()->id;
        $payment->status = 'pending'; //pending, waiting, success
        // $payment->proof = $request->proof;
        // $file = $request->file('proof');
        // $name = time() . $file->getClientOriginalName();
        // $file->move('public/assets/img/transkasi/', $name);
        // $payment->file = $name;
        if($request->hasFile('proof'))
        {
            $extFile = $request->proof->getClientOriginalExtension();
            $namaFile = 'class-pos-gym-'.time().".".$extFile;
            $path = $request->proof->move('public/assets/img/transkasi/',$namaFile);
            $payment->proof = $path;
        }
        $payment->save();

        // return $payment;


        return redirect()->back();
    }


    public function aprove(Request $request, $id)
    {


        $payment = Payment::find($id);

        $payment->status = 'success'; //pending, waiting, success

        $payment->save();

        return redirect()->back();
    }

}

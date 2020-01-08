<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Validator;

use Carbon\Carbon;

class AppointmentsController extends Controller
{
  /**
   * Create a new controller instance.
   *
   * @return void
   */
  public function __construct()
  {
      $this->middleware('auth');
  }

  /**
   * Show the application dashboard.
   *
   * @return \Illuminate\Contracts\Support\Renderable
   */

   public function new ()
   {
     return view ('new-appointment');
   }

   public function submit (Request $request)
   {

     $validator = Validator::make($request->all(), [
       'date'=>'required',
       'starting_time'=>'required',
       'room'=>'required',
       'participants'=>'required',
       ]);

       if ($validator->fails()) {
           return back()
           ->withInput()
           ->withErrors($validator);
       }

           $addappointment = new \App\Appointment;
           $addappointment->date = $request->date;
           $addappointment->starting_time = $request->starting_time;
           $endtime = $request->starting_time;
           $et = Carbon::parse($endtime);
           $addappointment->ending_time = $et->addMinutes(90);
           $addappointment->room = $request->room;
           $addappointment->participants = $request->participants;
           $addappointment->user_id = $request->user_id;
           $addappointment->status = "pending";
           $addappointment->save();

     return redirect ('home')->with('status' , 'Your new appointment submited succesfully. Please wait to aprove from administartor!');
   }
}

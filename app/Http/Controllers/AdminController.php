<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\User;

use App\Appointment;

use Auth;

class AdminController extends Controller
{
  public function __construct()
  {
      $this->middleware('auth');
  }
  public function admin()
  {
      $users=User::where('type', 'default')->orderBy('created_at' , 'DESC')->get();

      return view('admin', compact('users'));
  }


  public function appointments($id)
  {

    $appointments=Appointment::with('user')->where('user_id' , $id)->orderBy('date' , 'DESC')->get();

    return view ('appointments', compact('appointments'));
  }


  public function aprove ($id)
  {

    $appointment=Appointment::find($id);

    $appointment->status = 'aprove';

    $appointment->save();

    return back();

  }


  public function reject ($id)
  {

    $appointment=Appointment::find($id);

    $appointment->status = 'reject';

    $appointment->save();

    return back();

  }

}

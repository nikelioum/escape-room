<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Appointment;

use App\User;

use Auth;

class HomeController extends Controller
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
    public function index()
    {
        $appointments=Appointment::orderBy('created_at' , 'DESC')->where('user_id' ,  Auth::id())->get();

        return view('home', compact('appointments'));
    }
}

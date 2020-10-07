<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Doctors;


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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $doctors = Doctors::orderBy('fName','asc')->paginate(2);
        $user_id = auth()->user()->id;
        $user = User::find($user_id);
        return view('home')->with('doctors',$user->doctors);
        //  return view('home')->with('doctors',$doctors);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        if($user->role_id != 1)
        {
          if ($user->role_id !=2) {
            return view('inovator.dashboard', compact('user'));
          }
        //   if ($user->role_id = 2)
        //   {
        //   return view('evaluator.dashboard');
        //   // }if ($user->role_id = 3)
        //   // {
        //   // return view('inovator.dashboard');
        // }else {
        //   return view('error-403');
        // }
        return view('evaluator.dashboard', compact('user'));
        }
        return view('admin.dashboard', compact('user'));
    }
}

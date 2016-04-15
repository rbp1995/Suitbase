<?php

namespace App\Http\Controllers;

use App\Http\Requests;
use Illuminate\Http\Request;
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
    if (Auth::user()) {
         return view('layoutTemplate'); //Page which you want to show for loged user.
    } else {
        return view('auth.login'); //You can redirect from here, if user is not logged in
    }

    }
}

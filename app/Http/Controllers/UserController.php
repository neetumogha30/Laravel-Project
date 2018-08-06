<?php

namespace App\Http\Controllers;

use Auth;

class UserController extends Controller
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

        if ($user->isAdmin()) {
            return view('pages.admin.home');
        }

        return view('pages.user.home');
    }
    public function newsFeed(){
        return view ('pages.user.newsfeed');
    }
    public function saveLocation(Request $request){
        $user = $request->input('user');
        $lat = $request->input('lat');
        $long = $request->input('long');
        print $user."----".$lat."---".$long;
        $user = Auth::user();
        
        if($user){}
    }
}

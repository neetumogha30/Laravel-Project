<?php

namespace App\Http\Controllers;
use Auth;

class WelcomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    
    public function welcome()
    {
//       $userId = Auth::id();
//       if (!$userId) {
//            return redirect()->to('/login')
//                ->with('status', 'success')
//                ->with('message', 'Please login.');
//        }
        return view('welcome');
    }
}

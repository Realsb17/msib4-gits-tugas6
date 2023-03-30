<?php

namespace App\Http\Controllers;

use Auth;
use session;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    public function index(){
        return view('pages.dashboard.index');
    }

    public function logout(Request $request){
       Auth::guard('web')->logout();
       $request->session()->invalidate();
       $request->session()->regenerateToken();
       return redirect('/');
    }
}

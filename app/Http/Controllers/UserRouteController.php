<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class UserRouteController extends Controller
{
    public function dashboard(){
        return view('Member.Dashboard.dashboard');
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index(){
        return view('Member.member-login');
    } //End method
    public function dashboard(){
        return view('Member.partials.dashboard-panel');
    } //End method

    public function login(Request $request){
        $check = $request->all();
    
        if (Auth::guard('user')->attempt(['account_number' => $check['account_number'], 'password' => $check['password']])) {
            // Log in successful
            return redirect()->route('member.dashboard');
        } else {
            // Log in failed
            return back()->with('error', 'Invalid Credentials');
        }
    }

    public function logout()
    {
        Auth::guard('user')->logout();

        return redirect()->route('login.member');
    } //End method
}

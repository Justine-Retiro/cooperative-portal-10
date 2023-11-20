<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    public function index(){
        return view('Admin.admin-login');
    } 
    // End method
    public function dashboard(){
        return view('Admin.partials.dashboard-panel');
    } //End method

    public function login(Request $request)
    {
        // dd($request->all());
        $check = $request->all();
    
        if (Auth::guard('admin')->attempt(['username' => $check['username'], 'password' => $check['password']])) {
            // Log in successful
            return redirect()->route('admin.dashboard')->with('error', 'Logged in successfully');
        } else {
            // Log in failed
            return back()->with('error', 'Invalid Credentials');
        }
    } //End method
    public function logout()
    {
        Auth::guard('admin')->logout();

        return redirect()->route('login.admin');
    } //End method
}

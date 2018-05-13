<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class CrmController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function log()
    {
        return view('login');
    }
    public function rset()
    {
        return view('auth/passwords/reset');
    }
    public function mail()
    {
        return view('auth/passwords/email');
    }
    public function reg()
    {   

        return view('register');
    }

    public function registerStep1()
   {
     print_r($_POST);die();
   }
        
    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            // Authentication passed...
            return redirect()->intended('dashboard');
        }
    }
}
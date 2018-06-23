<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use App\Models\User;



class CrmController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }
    public function log()
    {
        return view('auth/login');
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

    public function registerStep1(Request $request)
   {
    
    $this->validate($request,[
          'fname' => 'required',
          'lname' => 'required',
          'phone' => 'required',
          'twitter' => 'required',
          'facebook' => 'required',
          'gplus' => 'required',
          'email' => 'required',
          'pass' => 'required'
    ]);
    
  
    $User = new User;
   
    $User->First_Name = $request->fname;
    $User->Last_Name = $request->lname ;
    $User->Phone = $request->phone;
    $User->Twitter = $request->twitter;
    $User->FaceBook = $request->facebook ;
    $User->Google_plus = $request->gplus;
    $User->Email = $request->email;
    $User->Password = $request->pass ;
    
    $User->save();
    return redirect('/login');
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
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class UserController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {
        //
    }
    public function index()
    {
        return view('questions.index');
    }
    public function login()
    {
       if(Auth::guard('users')->check())
       {
          return redirect(route('user.index')); 
       }
       else{
          return view('user.login');
       }
      
    }
    public function postlogin(Request $request)
    {
        if(Auth::guard('users')->attempt(['name'=>$request->User, 'password'=>$request->password]))
        {
            return redirect(route('home'));
        }
        else
        {     
            return redirect()->back()->withInput()->with('notify','User Or Password Not Correct Or User Blocking');
        }
    }
    public function logout()
    {
        Auth::guard('users')->logout();
        return redirect(route('user.login'));
    }
}

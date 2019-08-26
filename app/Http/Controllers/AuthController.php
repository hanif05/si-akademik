<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function index()
    {
        return view('pages.login.index');
    }

    public function validation()
    {
        if (Auth::attempt(request()->only('email', 'password'))){
            $u = auth()->user()->level_id;
            if($u == "1"){
                return redirect('/home');
            } else if ($u == "2") {
                return redirect('/profile');   
            } else if ($u == "3") {
                return redirect('/profile');   
            }
        }

        return redirect('/');
    }

    public function logout()
    {
        Auth::logout();

        return redirect('/');
    }
}

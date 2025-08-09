<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

class Dash extends Controller
{
    public function dash()
    {

        if (Auth::check()) {


            return view('cloudwork.dashboard');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function train()
    {

        if (Auth::check()) {


            return view('cloudwork.train');
        }

        //return back()->with('error', 'Entry Denied, Log in Again!');


        return view('cloudwork.train');
    }



    public function task()
    {

        if (Auth::check()) {


            return view('cloudwork.task');
        }

        //return back()->with('error', 'Entry Denied, Log in Again!');


        return view('cloudwork.task');
    }

    public function logout()
    {
        if (Auth::check()) {

            Session::flush();

            Auth::logout();

            return Redirect('/');
        }
    }
}

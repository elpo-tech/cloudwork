<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Accdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

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

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function pro()
    {

        if (Auth::check()) {


            return view('cloudwork.profile');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function not()
    {

        if (Auth::check()) {


            return view('cloudwork.notify');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function prog()
    {

        if (Auth::check()) {


            $earn = Accdb::where('uid', Auth::user()->id)->first();
            return view('cloudwork.pro', compact('earn'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }



    public function tic()
    {

        if (Auth::check()) {


            return view('cloudwork.ticket');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
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

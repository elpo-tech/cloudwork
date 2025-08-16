<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Tasks extends Controller
{
    public function task()
    {

        if (Auth::check()) {


            return view('cloudwork.task.task');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function sub()
    {

        if (Auth::check()) {


            return view('cloudwork.task.sub');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function pro()
    {

        if (Auth::check()) {


            return view('cloudwork.task.pro');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function app()
    {

        if (Auth::check()) {


            return view('cloudwork.task.app');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function rej()
    {

        if (Auth::check()) {


            return view('cloudwork.task.rej');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }
}

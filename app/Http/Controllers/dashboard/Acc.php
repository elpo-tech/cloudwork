<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Accdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Acc extends Controller
{
    public function earn()
    {

        if (Auth::check()) {


            $earn = Accdb::where('uid', Auth::User()->id)->first();

            return view('cloudwork.earn.acc', compact('earn'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function with()
    {

        if (Auth::check()) {

            $earn = Accdb::where('uid', Auth::User()->id)->first();
            return view('cloudwork.earn.with', compact('earn'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }
}

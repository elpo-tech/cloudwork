<?php

namespace App\Http\Controllers;

use App\Models\Accdb;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Cloudwork extends Controller
{
    public function index()
    {
        if (Auth::check()) {

            return Redirect('/dashboard');
        }

        return view('login');
    }


    public function pro()
    {
        if (Auth::check()) {

            return Redirect('/dashboard');
        }

        return view('login');
    }



    public function sign()
    {
        if (Auth::check()) {

            return Redirect('/dashboard');
        }

        return view('sign');
    }


    public function pay($id)
    {
        if (Auth::check()) {
            return Redirect('/dashboard');
        }
        return view('pay');
    }


    public function patrain($id)
    {

        return view('pay2');
    }

    public function checkUserData(Request $request)
    {
        $exists = [
            'username' => \App\Models\User::where('username', $request->username)->exists(),
            'email'    => \App\Models\User::where('email', $request->email)->exists(),
            'phone'    => \App\Models\User::where('phone', $request->phone)->exists(),
        ];

        return response()->json($exists);
    }


    public function reg(Request $request)
    {



        User::create([
            'fname' => $request->fname,
            'lname'  => $request->lname,
            'username'   => $request->username,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'status'      => '0',
            'type'      => 'User',
            'level'      => 'Level 1',
            'foth1'      => 'default.jpg',
            'country'    => $request->country,
            'password'   => bcrypt($request->password),
        ]);


        Accdb::create([
            'uid' => User::where('email', $request->email)->latest()->first()->id,
            'user'  => $request->username,
            'email'      => $request->email,
            'phone'      => $request->phone,
            'country'    => $request->country,
        ]);

        $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::User();
            Session::put('name', $user->name);
            Session::put('type', $user->type);


            Alert::success('Registration Successfully!!!', 'Welcome To CloudWorkly!!!');
            return redirect('/dashboard')->with('success', 'Login Successful!!');
        }
    }


    public function lvalidate(Request $request)
    {
        $request->validate([
            'name' =>  'required',
            'password'  =>  'required'
        ]);

        $login = $request->input('name');
        $type = filter_var($login, FILTER_VALIDATE_EMAIL) ? 'email' : (is_numeric($login) ? 'phone' : 'username');
        $request->merge([
            $type => $login,
            'password' => $request->password
        ]);

        $credentials = $request->only($type, 'password');

        if (Auth::attempt($credentials)) {
            $user = Auth::User();

            return redirect('/dashboard')->with('success', 'Login Successful!!');
        }

        return redirect('/')->with('error', 'Invalid Credentials');
    }
}

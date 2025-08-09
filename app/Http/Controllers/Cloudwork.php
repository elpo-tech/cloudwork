<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Cloudwork extends Controller
{
    public function index()
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


    public function reg(Request $request)
    {

        $request->validate([
            'username'   => 'required|string|max:255|unique:users',
            'email'      => 'required|email|unique:users',
            'phone'      => 'required|string|max:20|unique:users',
        ]);

        $user = User::create([
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

        return response()->json(['success' => true, 'user_id' => $user->id]);
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

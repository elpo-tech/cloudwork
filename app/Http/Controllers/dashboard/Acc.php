<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Accdb;
use App\Models\Transdb;
use App\Models\Withdb;
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
            $trans = Transdb::where('uid', Auth::User()->id)->get();

            return view('cloudwork.earn.acc', compact('earn', 'trans'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function with()
    {

        if (Auth::check()) {

            $earn = Accdb::where('uid', Auth::User()->id)->first();
            $trans = Transdb::where('uid', Auth::User()->id)->get();
            return view('cloudwork.earn.with', compact('earn', 'trans'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function addreq(Request $request)
    {

        $earn = Accdb::where('uid', Auth::User()->id)->first();

        if ($earn->bal < 50) {

            Alert::error('Insufficient Funds', 'Account Balance Should be $50.00');
            return back();
        }



        $data = $request->all();

        do {
            $number = mt_rand(100000, 999999); // Generates a random 6-digit number
        } while (Transdb::where('ref', $number)->exists());


        Withdb::create([

            'ref'  =>  $number,
            'user'  => Auth::User()->username,
            'uid'  =>  Auth::User()->id,
            'phone'  =>  $data['phone'],
            'email'  =>  Auth::User()->email,
            'type'  =>  'Withdrawal',
            'amnt'  =>  $data['amnt'],
        ]);

        Alert::error('Pay Taxes', 'Pay your Country VAT To Make A Withdrawal');

        return back()->with('error', "Paytaxes");
    }
}

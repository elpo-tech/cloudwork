<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Accdb;
use App\Models\Jobdb;
use App\Models\Orderdb;
use App\Models\Transdb;
use App\Models\User;
use App\Models\Withdb;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;

class Admin extends Controller
{
    public function task()
    {

        if (Auth::check()) {


            do {
                $number = mt_rand(10000000, 99999999); // Generates a random 8-digit number
            } while (Orderdb::where('code', $number)->exists());


            $tasks = Orderdb::get();


            return view('cloudwork.admin.task', compact('number', 'tasks'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function sub()
    {

        if (Auth::check()) {

            $task = Jobdb::where('status', 'Submitted')->with(['sta'])->get();

            return view('cloudwork.admin.sub', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function bid()
    {

        if (Auth::check()) {


            $task = Jobdb::where('status', 'Pending')->with(['sta'])->get();

            return view('cloudwork.admin.bid', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function pay()
    {

        if (Auth::check()) {

            $task = Transdb::get();

            return view('cloudwork.admin.pay', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function user()
    {

        if (Auth::check()) {

            $task = User::with('earn')->get();

            return view('cloudwork.admin.user', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function app()
    {

        if (Auth::check()) {

            $task = Jobdb::where('status', 'Approved')->with(['sta'])->get();

            return view('cloudwork.admin.app',  compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function with()
    {

        if (Auth::check()) {

            $task = Withdb::get();

            return view('cloudwork.admin.with', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function addtask(Request $request)
    {

        $file = $request->file;

        if ($file) {

            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move(public_path('/assets/files'), $filename);
        }



        $data = $request->all();

        $status = "1";

        try {
            $status = $data['status'];
        } catch (\Throwable $th) {
            //throw $th;
        }


        Orderdb::create([

            'code'  =>  $data['code'],
            'title'  =>  $data['oname'],
            'pay'  =>  $data['amnt'],
            'descr'  =>  'None',
            'dead'  =>  $data['time'],
            'status'  =>  $status,
            'instruct'  =>  $data['descr'],
            'done'  =>  $data['sub'],
            'rqmnt'  => $request->file ? $filename : ''



        ]);

        Alert::success('Task Created Successfully');

        return back();
    }


    public function edittask(Request $request, $id)
    {
        $info = Orderdb::find($id);

        $file = $request->file;

        if ($file) {

            $extension = $file->getClientOriginalExtension();
            $filename = time() . '.' . $extension;

            $file->move(public_path('/assets/files'), $filename);

            $info->rqmnt = $request->file ? $filename : '';
            $info->update();
        }




        $data = $request->all();


        $info->title = $data['oname'];
        $info->pay = $data['amnt'];
        $info->instruct = $data['descr'];
        $info->dead = $data['time'];
        $info->status = $data['status'];
        $info->done = $data['sub'];

        $info->update();

        Alert::success('Task Updated Successfully');
        return back();
    }

    public function deletetask($id)
    {
        if (Auth::check()) {

            $info = Orderdb::find($id);
            $info->delete();

            Alert::success('Task Deleted Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }


    public function edituser(Request $request, $id)
    {
        if (Auth::check()) {

            $info = User::findOrFail($id);

            $column = $request->input('column');
            $value = $request->input('value');



            $info->$column = $value;
            $info->save();




            return response()->json(['message' => 'Updated successfully']);
        }
    }


    public function deleteuser($id)
    {
        if (Auth::check()) {

            $info = User::find($id);

            try {
                Accdb::where('uid', $info->id)->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }


            try {
                Jobdb::where('user', $info->user)->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }

            try {
                Transdb::where('user', $info->user)->delete();
            } catch (\Throwable $th) {
                //throw $th;
            }



            $info->delete();



            Alert::success('Account Deleted Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }


    public function approve($id)
    {
        if (Auth::check()) {

            $info = Jobdb::find($id);

            $info->status = "Accepted";
            $info->update();

            Alert::success('Task Approved Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }


    public function acc($id)
    {
        if (Auth::check()) {

            $info = Jobdb::find($id);

            $info->status = "Approved";
            $info->update();


            $pay = $info->pay;

            $getuser = Accdb::where('user', $info->user)->first();

            $getuser->earn =  $getuser->earn + $pay;
            $getuser->bal =  $getuser->bal + $pay;

            $getuser->update();

            $user = User::where('username', $info->user)->first();

            do {
                $number = mt_rand(100000, 999999); // Generates a random 6-digit number
            } while (Transdb::where('ref', $number)->exists());

            Transdb::create([

                'ref'  =>  $number,
                'user'  => $info->user,
                'uid'  =>  $user->id,
                'phone'  =>  $user->phone,
                'email'  =>  $user->email,
                'status'  =>  'Paid Out',
                'type'  =>  'Task',
                'amnt'  =>  $pay
            ]);

            Alert::success('Task Approved Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }





    public function rej($id)
    {
        if (Auth::check()) {

            $info = Jobdb::find($id);

            $info->status = "Rejected";
            $info->update();

            Alert::success('Task Rejected Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }
}

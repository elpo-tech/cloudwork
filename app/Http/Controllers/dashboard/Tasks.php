<?php

namespace App\Http\Controllers\dashboard;

use App\Http\Controllers\Controller;
use App\Models\Jobdb;
use App\Models\Orderdb;
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

            $tasks = Orderdb::where('status', '1')->get();

            return view('cloudwork.task.task', compact('tasks'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function view($id)
    {

        if (Auth::check()) {

            $task = Orderdb::find($id);

            return view('cloudwork.task.view', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function do($id)
    {

        if (Auth::check()) {



            $task = Jobdb::find($id);

            return view('cloudwork.task.do', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function take($id)
    {

        if (Auth::check()) {

            $info = Orderdb::find($id);


            try {
                $job = Jobdb::where('oid', $info->id)->where('user', Auth::User()->username)->where('pro', '0')->first();

                if ($job->code == $info->code) {

                    Alert::error('You Have Already Bidded this Task, Wait For Approval Before trying Again');
                    return back();
                }
            } catch (\Throwable $th) {
                //throw $th;
            }

            Jobdb::create([

                'oid'  =>  $info->id,
                'code'  =>  $info->code,
                'title'  =>  $info->title,
                'pay'  =>  $info->pay,
                'descr'  =>  $info->descr,
                'dead'  =>  $info->dead,
                'user'  =>  Auth::User()->username,
                'instruct'  =>  $info->instruct,
                'rqmnt'  => $info->rqmnt,
                'done'  => $info->done,
                'com'  => '1',
                'pro'  => '0',
                'status'  => 'Pending'


            ]);

            Alert::success('Bid Placed Successfully', 'Wait For Approval');

            return redirect('/progress-task');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function submit(Request $request, $id)
    {

        if (Auth::check()) {

            $info = Jobdb::find($id);

            $file = $request->file;

            if ($file) {

                $extension = $file->getClientOriginalExtension();
                $filename = time() . '.' . $extension;

                $file->move(public_path('/assets/files'), $filename);


                $info->status = "Submitted";
                $info->pro = "1";
                $info->proof = $filename;


                $info->update();
            } else {

                Alert::error('Proof is Required', 'Attach Proof before Submitting Task');
                return back();
            }





            Alert::success('Task Successfully Submitted', 'Wait For Approval');

            return redirect('/progress-task');
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function sub()
    {

        if (Auth::check()) {


            $task = Jobdb::where('user', Auth::User()->username)->where('status', 'Submitted')->get();

            return view('cloudwork.task.sub', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function pro()
    {

        if (Auth::check()) {


            $task = Jobdb::where('user', Auth::User()->username)->where('pro', '0')->get();


            return view('cloudwork.task.pro', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function app()
    {

        if (Auth::check()) {

            $task = Jobdb::where('user', Auth::User()->username)->where('status', 'Approved')->get();

            return view('cloudwork.task.app', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }

    public function rej()
    {

        if (Auth::check()) {

            $task = Jobdb::where('user', Auth::User()->username)->where('status', 'Rejected')->get();

            return view('cloudwork.task.rej', compact('task'));
        }

        return back()->with('error', 'Entry Denied, Log in Again!');
    }


    public function deletetask($id)
    {
        if (Auth::check()) {

            $info = Jobdb::find($id);
            $info->delete();

            Alert::success('Task Deleted Successfully!!');
            return back();
        }


        return back()->with('error', 'Access Denied!! Session Expired');
    }
}

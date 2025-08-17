<?php

use App\Http\Controllers\Cloudwork;
use App\Http\Controllers\dashboard\Acc;
use App\Http\Controllers\dashboard\Admin;
use App\Http\Controllers\dashboard\Dash;
use App\Http\Controllers\dashboard\Tasks;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|


Route::get('/', function () {
    return view('welcome');
});
*/

Route::get('/test-500', function () {
    abort(404);
});

Route::post('/check-user-data', [Cloudwork::class, 'checkUserData'])->name('users.check');

Route::get('/', [Cloudwork::class, "index"])->name('login');
Route::get('/register', [Cloudwork::class, "sign"])->name('sign');
Route::post('/payment', [Cloudwork::class, 'store'])->name('payments.store');
Route::post('/paytaxes', [Cloudwork::class, 'tax'])->name('payments.tax');

Route::get('/paytrain/{id}', [Cloudwork::class, "patrain"])->name('patrain');
Route::get('/paytax/{id}', [Cloudwork::class, "patax"])->name('patax');
Route::POST('/signuser', [Cloudwork::class, "reg"])->name('register.store');
Route::POST("lvalidate", [Cloudwork::class, "lvalidate"])->name("log.lvalidate");
Route::POST("pay", [Cloudwork::class, "pro"])->name("log.pay");


Route::get("/logout", [Dash::class, "logout"])->name("logout");
Route::get('/dashboard', [Dash::class, "dash"])->name('dash');
Route::get('/training-center', [Dash::class, "train"])->name('train');
Route::get('/profile', [Dash::class, "pro"])->name('profile');
Route::get('/notifications', [Dash::class, "not"])->name('notify');
Route::get('/myprogress', [Dash::class, "prog"])->name('prog');
Route::get('/ticket', [Dash::class, "tic"])->name('ticket');


Route::get('/available-task', [Tasks::class, "task"])->name('task');
Route::get('/view_task/{id}', [Tasks::class, "view"])->name('view');
Route::get('/take_task/{id}', [Tasks::class, "take"])->name('take');
Route::get('/do_task/{id}', [Tasks::class, "do"])->name('do');
Route::post('/submit_task/{id}', [Tasks::class, "submit"])->name('submit');
Route::get('/submitted-task', [Tasks::class, "sub"])->name('submit');
Route::get('/progress-task', [Tasks::class, "pro"])->name('pro');
Route::get('/approved-task', [Tasks::class, "app"])->name('app');
Route::get('/rejected-task', [Tasks::class, "rej"])->name('reject');
Route::get('/delete_order/{id}', [Tasks::class, "deletetask"])->name('deletetask');


Route::get('/tasks', [Admin::class, "task"])->name('tasks');
Route::post('/add_task', [Admin::class, "addtask"])->name('addtasks');
Route::post('/edit_task/{id}', [Admin::class, "edittask"])->name('edittasks');
Route::post('/edit_user/{id}', [Admin::class, "edituser"])->name('edituser');
Route::get('/approve_task/{id}', [Admin::class, "approve"])->name('approvetasks');
Route::get('/accept_task/{id}', [Admin::class, "acc"])->name('accepttasks');
Route::get('/reject_task/{id}', [Admin::class, "rej"])->name('rejtasks');
Route::get('/delete_task/{id}', [Admin::class, "deletetask"])->name('deletetask');
Route::get('/delete_user/{id}', [Admin::class, "deleteuser"])->name('deleteuser');
Route::get('/submitted-work', [Admin::class, "sub"])->name('submitted');
Route::get('/biddings', [Admin::class, "bid"])->name('bid');
Route::get('/payments', [Admin::class, "pay"])->name('payment');
Route::get('/all_users', [Admin::class, "user"])->name('users');
Route::get('/approved-work', [Admin::class, "app"])->name('approved');
Route::get('/requests', [Admin::class, "with"])->name('withdraw');


Route::get('/earnings', [Acc::class, "earn"])->name('earn');
Route::get('/withdraw', [Acc::class, "with"])->name('with');
Route::post('/add_request', [Acc::class, "addreq"])->name('addrequest');

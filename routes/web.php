<?php

use App\Http\Controllers\Cloudwork;
use App\Http\Controllers\dashboard\Acc;
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
Route::get('/payment/{id}', [Cloudwork::class, "pay"])->name('pay');
Route::get('/paytrain/{id}', [Cloudwork::class, "patrain"])->name('patrain');
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
Route::get('/submitted-task', [Tasks::class, "sub"])->name('submit');
Route::get('/progress-task', [Tasks::class, "pro"])->name('pro');
Route::get('/approved-task', [Tasks::class, "app"])->name('app');
Route::get('/rejected-task', [Tasks::class, "rej"])->name('reject');


Route::get('/earnings', [Acc::class, "earn"])->name('earn');
Route::get('/withdraw', [Acc::class, "with"])->name('with');

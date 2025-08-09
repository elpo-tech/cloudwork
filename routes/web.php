<?php

use App\Http\Controllers\Cloudwork;
use App\Http\Controllers\dashboard\Dash;
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

Route::get('/check-unique', function (Illuminate\Http\Request $request) {
    $field = $request->get('field');
    $value = $request->get('value');

    $allowed = ['username', 'email', 'phone'];
    if (!in_array($field, $allowed)) {
        return response()->json(['unique' => false]);
    }

    $exists = \App\Models\User::where($field, $value)->exists();
    return response()->json(['unique' => !$exists]);
});


Route::get('/', [Cloudwork::class, "index"])->name('login');
Route::get('/register', [Cloudwork::class, "sign"])->name('sign');
Route::POST('/signuser', [Cloudwork::class, "reg"])->name('register.store');
Route::POST("lvalidate", [Cloudwork::class, "lvalidate"])->name("log.lvalidate");


Route::get("/logout", [Dash::class, "logout"])->name("logout");
Route::get('/dashboard', [Dash::class, "dash"])->name('dash');
Route::get('/training-center', [Dash::class, "train"])->name('train');
Route::get('/available-task', [Dash::class, "task"])->name('task');

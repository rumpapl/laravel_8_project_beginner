<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserInfo;
use App\Http\Controllers\loginUser;
use App\Http\Controllers\UserController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get("/", [UserController::class, 'getData']);

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/hello', function () {
    return view('hello');
});

Route::get('/dataFromController', [UserInfo::class, 'info'] ,function () {
    return view('dataFromController');
});

// Route::get('/dataFromController', 
// [UserInfo::class, 'info']);

Route::get('/about', function () {
    return view('about');
});

Route::get('/contact', function () {
    return view('contact');
});

Route::get('/redirect', function () {
    // return view('redirectpage');
    return redirect ('/about');
});


Route::post('/login',[loginUser::class, "loginUserData"]);
Route::view('/login', 'login');



<?php

use Illuminate\Support\Facades\Route;
use app\Http\Controllers;
use App\Http\Controllers\UserController;
use App\Http\Controllers\QuizController;

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

Route::get('/', function () {
    return view('modul2');
});
Route::get('/home', function () {
    return view('home2');
});
Route::get('/modul', function () {
    return view('modul');
});
Route::get('/coba', function () {
    return view('coba');
});
Route::get('/quiz', function () {
    return view('quiz');
});
Route::get('/app', function () {
    return view('app');
});
Route::get('/login', function () {
    return view('authuser.login');
});
Route::get('/addsoal', function () {
    return view('addsoal');
});

/*resource*/
Route::resource('/user', UserController::class);
Route::resource('/quisz', QuizController::class);
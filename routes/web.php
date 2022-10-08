<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\users;
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

// frontend
Route::get('/', function () {
    return view('welcome');
});

Route::get('first', function () {
    return view('first');
});

Route::get('urldata/{name}',function($name){
    return view('urldata',['name'=>$name]);
});

Route::view('about','/about');
Route::view('contact','/contact');
Route::view('multipage','/multipage');
Route::view('header','/header');

// admin panel router
Route::view('admin','admin/home');

// controllers
// Route::get('users',[users::class,'index']);
Route::get('users/{name}',[users::class,'index']);

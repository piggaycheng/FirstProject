<?php

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
    return view('welcome');
});

Route::get('/guest', function () {
    return view('frontend.layouts.home');
});

Route::get('/gallery', function () {
    return view('frontend.layouts.gallery');
});

// Route::get('/login', function () {
//     return view('frontend.login');
// });

// Route::post('/login', 'Auth\LoginController@login')->name('login');

// 用auth middleware進行驗證
// Route::middleware(['auth'])->group(function () {
//     Route::get('logout', 'Auth\LoginController@logout')->name('logout');
// });

// Route::get('/home', function () {
//     return view('frontend.layouts.home');
// });

// Route::auth();

Auth::routes();

Route::get('/logout', 'App\Http\Controllers\Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
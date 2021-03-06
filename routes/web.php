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
    $posts = DB::table('posts')->orderBy('id', 'desc')->paginate(8);

    return view('frontend.layouts.home', compact('posts'));
});

// Route::get('/gallery', function () {
//     return view('frontend.layouts.gallery');
// });

// Route::get('/profile', function () {
//     return view('frontend.layouts.profile');
// });

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

Route::get('/logout', 'Auth\LoginController@logout');

Route::get('/home', 'HomeController@index')->name('home');
//----------------------gallery--------------------
Route::get('/gallery', 'Frontend\PostController@query')->name('gallery');

Route::post('/upload', 'Frontend\PostController@upload')->name('upload');
//----------------------profile--------------------
Route::get('/createUserInfo', 'Frontend\UserInfoController@create')->name('createUserInfo');

Route::get('/showUserInfo', 'Frontend\UserInfoController@show')->name('profile');

Route::post('/updateUserInfo', 'Frontend\UserInfoController@update')->name('updateUserInfo');

Route::post('/search', 'Frontend\UserInfoController@search')->name('search');

Route::get('/clickCard/{id}', 'Frontend\UserInfoController@clickCard')->name('clickCard');
//-------------------------------------------------
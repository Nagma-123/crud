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
    return view('index');
});


// Route::get('/admin', '\App\Http\Controllers\admin\LoginController@index');
Route::get('/post', '\App\Http\Controllers\admin\Post@index')->name('post');
Route::delete('/delete_post/{id}', '\App\Http\Controllers\admin\Post@delete_post')->name('delete_post');
Route::get('/add_post', '\App\Http\Controllers\admin\Post@create')->name('add_post');
Route::post('/add_post', '\App\Http\Controllers\admin\Post@add_post');
Route::get('/edit_post/{id}', '\App\Http\Controllers\admin\Post@edit_post')->name('edit_post');
Route::post('/update_post/{id}', '\App\Http\Controllers\admin\Post@update_post')->name('update_post');



// Authentication Routes...
Route::get('login', 'Auth\LoginController@showLoginForm')->name('login');
Route::post('login', 'Auth\LoginController@login');
Route::post('logout', 'Auth\LoginController@logout')->name('logout');

// Registration Routes...
Route::get('register', 'Auth\RegisterController@showRegistrationForm')->name('register');
Route::post('register', 'Auth\RegisterController@register');

// Password Reset Routes...
Route::get('password/reset', 'Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
Route::post('password/email', 'Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');
Route::get('password/reset/{token}', 'Auth\ResetPasswordController@showResetForm')->name('password.reset');
Route::post('password/reset', 'Auth\ResetPasswordController@reset');


Auth::routes();

//Route::get('/home', 'HomeController@index')->name('home');
Route::get('/dashboard', 'Dashboard@index')->name('dashboard');



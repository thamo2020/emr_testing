<?php

use Illuminate\Support\Facades\Route;

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
Route::get('/user','UserController@index' 

);
Route::get('/login','LoginController@index');
Route::post('/login','LoginController@loginSubmit')->name('login.submit');

Route::get('/home', function () {
    return view('home');
});
Route::get('/profile','profileController@index');

Route::post('/profile','profileController@profileSubmit')->name('profile.submit');

Route::get('/update', function () {
    return view('update');
});

Route::get('/share', function () {
    return view('share');
});
Route::get('/view', function () {
    return view('view');
});

Route::get('/upload','uploadController@uploadform');

Route::post('/upload','uploadController@uploadimages')->name('uploadimages');

Route::get('/dsignup','doctorController@show');
Route::post('/dsignup','doctorController@signupSubmit')->name('signup.submit');

Route::get('/psignup','patientController@show');
Route::post('/psignup','patientController@signupSubmit')->name('signup.submit');


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


Route::get('/home', function () {
    return view('home');
});
Route::get('/profile','profileController@index');
Route::post('/profile','profileController@store');
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




Route::get('/p-login', function () {
    return view('p-login');
});
Route::get('/p-register', function () {
    return view('p-register');
});

Route::get('/p-forget', function () {
    return view('p-forget');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group (function(){

    //dashboard route

    Route::get('/admin', 'App\Http\Controllers\AdminController@index')->name('admin.dashboard');

    //login route

    Route::get('/login', 'App\Http\Controllers\Auth\AdminLoginController@showLoginForm')->name('admin.login');

    Route::post('/login', 'App\Http\Controllers\Auth\AdminLoginController@login')->name('admin.login.submit');

    //logout route

    Route::post('/logout', 'App\Http\Controllers\Auth\AdminLoginController@logout')->name('admin.logout.submit');

    //register route

    Route::get('/register', 'App\Http\Controllers\Auth\AdminRegisterController@showRegisterForm')->name('admin.register');

    Route::post('/register', 'App\Http\Controllers\Auth\AdminRegisterController@register')->name('admin.register.submit');


});


Route::prefix('doctor')->group (function(){
    
     //dashboard route

     Route::get('/doctor', 'App\Http\Controllers\doctorController@index')->name('doctor.dashboard');

    //login route

    Route::get('/login', 'App\Http\Controllers\Auth\DoctorLoginController@showLoginForm')->name('doctor.login');

    Route::post('/login', 'App\Http\Controllers\Auth\DoctorLoginController@login')->name('doctor.login.submit');

    //logout route

    Route::post('/logout', 'App\Http\Controllers\Auth\DoctorLoginController@logout')->name('doctor.logout.submit');

    //register route

    Route::get('/register', 'App\Http\Controllers\Auth\DoctorRegisterController@showRegisterForm')->name('doctor.register');

    Route::post('/register', 'App\Http\Controllers\Auth\DoctorRegisterController@register')->name('doctor.register.submit');


});





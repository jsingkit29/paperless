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
    return view('auth/login');
});

Route::get('/dashboard', 'DashboardController@index');

Auth::routes();

Route::post('/processLogIn', 'Auth\LoginController@processLogin');

Route::post('/login', 'Auth\LoginController@processLogin');



// Admin routes
Route::get('/admin', function () {
    return view('auth/login');
});
Route::get('/users/create', 'AdminController@create');
Route::get('/logout', 'AdminController@logout')->name('logout');
Route::post('/users/store', 'AdminController@store')->name("saved_users");



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

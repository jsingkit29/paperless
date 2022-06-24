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

Route::get('/dashboard', [\App\Http\Controllers\DashboardController::class, 'index']);

//Auth::routes();

Route::post('/processLogIn', [\App\Http\Controllers\Auth\LoginController::class, 'processLogin']);

Route::get('/login',  function () {
    return view('auth/login');
})->name('login');

//User routes
//Route::get('/users/create', 'AdminController@create');
Route::get('/users/create', [\App\Http\Controllers\AdminController::class, 'create']);
Route::get('/users/view', [\App\Http\Controllers\AdminController::class, 'view']);
Route::get('/logout', [\App\Http\Controllers\AdminController::class, 'logout'])->name('logout');
Route::post('/users/store', [\App\Http\Controllers\AdminController::class, 'store'])->name("saved_users");

// Admin routes
// Route::get('/admin', function () {
//     return view('auth/login');
// });
// Route::get('/users/create', 'AdminController@create');
// Route::get('/logout', 'AdminController@logout')->name('logout');
// Route::post('/users/store', 'AdminController@store')->name("saved_users");



Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

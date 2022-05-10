<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

// User
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\addCourseController;

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

Route::get('/register', [LoginRegisterController::class, 'index'])->name('register');
Route::get('/registerSuccess', [LoginRegisterController::class, 'registerSuccess'])->name('registerSuccess');
Route::resource('/dashboard', DashboardController::class);
Route::resource('/addCourse', addCourseController::class);

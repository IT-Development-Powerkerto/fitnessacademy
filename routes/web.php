<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\LoginRegisterController;

// User
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\addCourseController;
use App\Http\Controllers\user\detailCourseController;
use App\Http\Controllers\user\CoachProfileController;
use App\Http\Controllers\user\UserProfileController;

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
Route::post('/register', [LoginRegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginRegisterController::class, 'login'])->name('login.login');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout.logout');
Route::get('/registerSuccess', [LoginRegisterController::class, 'registerSuccess'])->name('registerSuccess');

Route::resource('/dashboard', DashboardController::class);

Route::resource('/addCourse', addCourseController::class);

Route::resource('/detailCourse', detailCourseController::class);

Route::resource('/coachProfile', CoachProfileController::class);

Route::resource('/userProfile', UserProfileController::class);
Route::get('/editUser', [UserProfileController::class, 'editUser'])->name('editUser');

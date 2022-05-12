<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\ErrorPageController;
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
})->middleware('guest');

Route::resource('/error-page', ErrorPageController::class);
Route::get('/error-page', [ErrorPageController::class, 'index'])->name('error-page');

Route::get('/register', [LoginRegisterController::class, 'index'])->name('register')->middleware('guest');
Route::post('/register', [LoginRegisterController::class, 'store'])->name('register.store');
Route::post('/login', [LoginRegisterController::class, 'login'])->name('login.login');
Route::post('/logout', [LoginRegisterController::class, 'logout'])->name('logout.logout');
Route::get('/registerSuccess', [LoginRegisterController::class, 'registerSuccess'])->name('registerSuccess')->middleware('guest');

// User

Route::resource('/dashboard', DashboardController::class)->middleware('auth');

Route::resource('/addCourse', addCourseController::class)->middleware('auth');

Route::resource('/detailCourse', detailCourseController::class)->middleware('auth');

Route::resource('/coachProfile', CoachProfileController::class)->middleware('auth');

Route::resource('/userProfile', UserProfileController::class)->middleware('auth');
Route::get('/editUser', [UserProfileController::class, 'editUser'])->name('editUser')->middleware('auth');


// Trainer


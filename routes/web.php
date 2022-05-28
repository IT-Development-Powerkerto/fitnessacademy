<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

use App\Http\Controllers\LoginRegisterController;
use App\Http\Controllers\ErrorPageController;
// User
use App\Http\Controllers\user\DashboardController;
use App\Http\Controllers\user\CourseController;
use App\Http\Controllers\user\SessionController;
use App\Http\Controllers\user\ExamController;
use App\Http\Controllers\user\CoachProfileController;
use App\Http\Controllers\user\UserProfileController;
use App\Http\Controllers\user\PaymentController;

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

Route::get('/detailCourse', [CourseController::class, 'index'])->name('course.detail')->middleware('auth');
Route::get('/detailOvervieweCourse/{course}', [CourseController::class, 'detailOvervieweCourse'])->name('detailOvervieweCourse.detailOvervieweCourse')->middleware('auth');
Route::get('/addCourse', [CourseController::class, 'addCourse'])->name('course.addcourse')->middleware('auth');
Route::get('/editCourse', [CourseController::class, 'edit'])->name('course.editcourse')->middleware('auth');
Route::resource('/course', CourseController::class)->middleware('auth');

Route::resource('/detailSession', SessionController::class)->middleware('auth');
Route::get('/addSession/{id}', [SessionController::class, 'addSession'])->name('addSession.addsession')->middleware('auth');
Route::get('/editSession', [SessionController::class, 'editSession'])->name('session.editsession')->middleware('auth');
Route::get('/setScoreSession', [SessionController::class, 'setScore'])->name('session.setScoreSession')->middleware('auth');
Route::get('/addScoreSession', [SessionController::class, 'addScore'])->name('session.addScoreSession')->middleware('auth');

Route::post('/session', [SessionController::class, 'store'])->name('session.store');

Route::resource('/coachProfile', CoachProfileController::class)->middleware('auth');

Route::resource('/userProfile', UserProfileController::class)->middleware('auth');
Route::get('/view/{id}', [UserProfileController::class, 'view'])->name('view')->middleware('auth');

Route::get('/editUser', [UserProfileController::class, 'editUser'])->name('editUser')->middleware('auth');
Route::get('/overviewStudent', [UserProfileController::class, 'overviewStudent'])->name('overviewStudent')->middleware('auth');

Route::get('/detailExam', [ExamController::class, 'detailExam'])->name('Exam.detailExam')->middleware('auth');
Route::get('/addExam/{id}', [ExamController::class, 'addExam'])->name('addExam.addExam')->middleware('auth');
Route::get('/editExam', [ExamController::class, 'editExam'])->name('Exam.editExam')->middleware('auth');
Route::get('/setScoreExam', [ExamController::class, 'setScore'])->name('Exam.setScoreExam')->middleware('auth');
Route::get('/addScoreExam', [ExamController::class, 'addScore'])->name('Exam.addScoreExam')->middleware('auth');

Route::post('/exam', [ExamController::class, 'store'])->name('exam.store')->middleware('auth');

//payment
Route::get('/payment/{id}', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/addpayment', [PaymentController::class, 'store'])->name('addpayment.store');
Route::post('/upload/{id}', [PaymentController::class, 'uploadImage'])->name('upload.uploadImage');
Route::post('/aprove/{id}', [PaymentController::class, 'aprove'])->name('aprove.aprove');

Route::get('/order', [PaymentController::class, 'order'])->name('order.order');

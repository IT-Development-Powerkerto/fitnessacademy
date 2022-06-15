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
// Route::get('/dashboard/{course_id}', [DashboardController::class, 'getCourse'])->name('getCourse')->middleware('auth');
Route::get('ajaxGetCourse/{course_id}', [DashboardController::class, 'ajaxGetCourse'])->name('ajaxGetCourse');
// Route::resource('/dashboard', DashboardController::class)->middleware('auth');
Route::post('/aproveUser/{id}', [DashboardController::class, 'aproveUser'])->name('aproveUser.aproveUser');
Route::post('/rejectUser/{id}', [DashboardController::class, 'rejectUser'])->name('rejectUser.rejectUser');
Route::get('/profile/{id}', [UserProfileController::class, 'trainerMy'])->name('profile');

Route::get('/detailCourse', [CourseController::class, 'index'])->name('course.detail')->middleware('auth');
Route::get('/detailOvervieweCourse/{course}', [CourseController::class, 'detailOvervieweCourse'])->name('detailOvervieweCourse.detailOvervieweCourse')->middleware('auth');
Route::get('/addCourse', [CourseController::class, 'addCourse'])->name('course.addcourse')->middleware('auth');
Route::get('/editCourse', [CourseController::class, 'edit'])->name('course.editcourse')->middleware('auth');
Route::resource('/course', CourseController::class)->middleware('auth');

Route::resource('/detailSession', SessionController::class)->middleware('auth');
Route::get('/addSession/{id}', [SessionController::class, 'addSession'])->name('addSession.addsession')->middleware('auth');
Route::get('/course/{course}/detailSession/{id}/edit', [SessionController::class, 'editSession'])->name('editSession.editSession')->middleware('auth');
// Route::get('/setScoreSession', [SessionController::class, 'setScore'])->name('session.setScoreSession')->middleware('auth');
// Route::get('/addScoreSession', [SessionController::class, 'addScore'])->name('session.addScoreSession')->middleware('auth');
Route::get('/addScoreSession/{id}', [SessionController::class, 'addScore'])->name('score')->middleware('auth');

Route::post('/session', [SessionController::class, 'store'])->name('session.store');
Route::post('/absen', [SessionController::class, 'absen'])->name('absen.absen')->middleware('auth');
Route::get('/presence/session/{id}', [SessionController::class, 'presence'])->name('presence.presence')->middleware('auth');
Route::get('/setScoreSession/session/{id}', [SessionController::class, 'componnent'])->name('setScoreSession.componnent')->middleware('auth');
Route::post('/component', [SessionController::class, 'scoreComponent'])->name('component.scoreComponent')->middleware('auth');

Route::post('/scoreAdd', [SessionController::class, 'scoreAdd'])->name('scoreAdd.scoreAdd');




Route::resource('/coachProfile', CoachProfileController::class)->middleware('auth');

Route::resource('/userProfile', UserProfileController::class)->middleware('auth');
Route::get('/view/{id}', [UserProfileController::class, 'view'])->name('view')->middleware('auth');

Route::post('/newpassword', [UserProfileController::class, 'NewPassword'])->name('newpassword');
Route::post('/forgotpassword', [UserProfileController::class, 'forgotPassword'])->name('forgotPassword');


Route::get('/editUser', [UserProfileController::class, 'editUser'])->name('editUser')->middleware('auth');
Route::get('/overviewStudent', [UserProfileController::class, 'overviewStudent'])->name('overviewStudent')->middleware('auth');

Route::get('/course/{course}/detailExam/{id}', [ExamController::class, 'detailExam'])->name('detailExam.detailExam')->middleware('auth');
Route::get('/addExam/{id}', [ExamController::class, 'addExam'])->name('addExam.addExam')->middleware('auth');
Route::get('/course/{course}/detailExam/{id}/edit', [ExamController::class, 'editExam'])->name('editExam.editExam')->middleware('auth');
Route::get('/course/{course}/detailExam/{id}/setScore', [ExamController::class, 'setScore'])->name('setScoreExam.setScore')->middleware('auth');
Route::get('/course/{course}/detailExam/{id}/addScoreExam', [ExamController::class, 'addScore'])->name('addScoreExam.addScore')->middleware('auth');
Route::post('/examComponent', [ExamController::class, 'scoreExam'])->name('examComponent.scoreExam')->middleware('auth');
Route::post('/addScoreExam', [ExamController::class, 'addScoreExam'])->name('addScoreExam.addScoreExam');
Route::get('/course/{course}/detailExam/{id}/presenceExam', [ExamController::class, 'presenceExam'])->name('presenceExam.presenceExam')->middleware('auth');
Route::post('/exam', [ExamController::class, 'store'])->name('exam.store')->middleware('auth');
Route::patch('/exam/{id}', [ExamController::class, 'update'])->name('exam.update')->middleware('auth');

Route::post('/absenExam', [ExamController::class, 'absenExam'])->name('absenExam.absenExam')->middleware('auth');



//payment
Route::get('/payment/{id}', [PaymentController::class, 'index'])->name('payment.index');
Route::post('/addpayment', [PaymentController::class, 'store'])->name('addpayment.store');
Route::post('/upload/{id}', [PaymentController::class, 'uploadImage'])->name('upload.uploadImage');
Route::post('/aprove/{id}', [PaymentController::class, 'aprove'])->name('aprove.aprove');
Route::post('/reject/{id}', [PaymentController::class, 'reject'])->name('reject.reject');



Route::get('/order', [PaymentController::class, 'order'])->name('order.order');

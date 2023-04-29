<?php

use App\Http\Controllers\Admin\Home_Controller;
use App\Http\Controllers\Admin\VisitController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Route::get('/', function () {
//     return view('auth.register');
// });

//Auth
Route::view('auth/signin', 'auth.login');
Route::view('auth/forgot', 'auth.forgot_account');
Route::view('auth/reset-form', 'auth.reset-form');

//Admin Page
Route::view('admin/home', 'admin.pages.home');
Route::view('admin/form', 'admin.pages.form');
Route::view('admin/advance', 'admin.pages.advance');
Route::view('admin/my-profile', 'admin.pages.profile.profile');
// Route::view('/', 'auth.login');
// Route::get('admin/logout', function () {
//    if (session()->has('Admin')){
//     session()->pull('Admin');
//    }
//    return redirect('/');
// });
Route::get('admin/logout', [AuthController::class, 'logout']);
Route::get('/', [AuthController::class, 'log']);

//User Page
Route::view('user/my-profile', 'user.pages.my-profile');
Route::view('user/home', 'user.pages.userhome');
Route::view('user/visit', 'user.pages.book-visitation.book');


Route::post('auth/register/verify', [AuthController::class, 'register'])->name('register'); //register
Route::get('auth/verify-account/{token}', [AuthController::class, 'verify_account']); //verifying the account
Route::post('auth/send-email',[AuthController::class, 'send_email']); //sending email
Route::get('auth/verify-reset/{token}', [AuthController::class, 'verify_reset']); //verifying the reset password
Route::post('auth/confirm-reset', [AuthController::class,'confirm_reset']); //confirming the reset link
Route::post('auth/login/user', [AuthController::class, 'login']); //login the user

Route::get('admin/visit', [VisitController::class,'index']);
// Route::post('auth/register', [AuthController::class,'register']);



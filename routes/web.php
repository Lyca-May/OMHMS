<?php


use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\User\FeedController;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\FunctionalHallController;
use App\Http\Controllers\Admin\Home_Controller;
use App\Http\Controllers\User\UserVisitController;
use App\Http\Controllers\User\UserFunctionalRoomController;



//Auth
// Route::view('auth/login', 'auth.login');
Route::view('auth/forgot', 'auth.forgot_account');
Route::view('auth/reset-form', 'auth.reset-form');



//Admin Page
Route::view('admin/home', 'admin.pages.home');
Route::view('admin/form', 'admin.pages.form');
Route::view('admin/advance', 'admin.pages.advance');


//User Page
Route::view('user/my-profile', 'user.pages.my-profile');
Route::view('user/home', 'user.pages.userhome');
// Route::view('user/visit', 'user.pages.book-visitation.book');

//booked reservation
// Route::view('user/bookedvisit', 'user.pages.booked.bookedvisit');
Route::view('user/rentedhall', 'user.pages.booked.rentedhall');




Route::view('auth/register', 'auth.register');
Route::post('auth/register/verify', [AuthController::class, 'register'])->name('register'); //register
Route::get('auth/verify-account/{token}', [AuthController::class, 'verify_account']); //verifying the account
Route::post('auth/send-email',[AuthController::class, 'send_email']); //sending email
Route::get('auth/verify-reset/{token}', [AuthController::class, 'verify_reset']); //verifying the reset password
Route::post('auth/confirm-reset', [AuthController::class,'confirm_reset']); //confirming the reset link
Route::post('auth/login/user', [AuthController::class, 'login']); //login the user
Route::get('logout', [AuthController::class, 'logout']);
Route::get('/', [AuthController::class, 'log']);

//Admin Page View
Route::get('admin/home', [VisitController::class, 'admin_home']);
Route::view('admin/form', 'admin.pages.form');
Route::view('admin/advance', 'admin.pages.advance');
Route::get('visits-charts', [Home_Controller::class, 'visualizeBookings']);
Route::view('admin/my-profile', 'admin.pages.profile.profile');
Route::view('cancel-status-page', 'admin.pages.visit.cancel-status');

//manage visit for admin
Route::get('admin/visit', [VisitController::class,'index']);
Route::post('approve-status', [VisitController::class,'approve_status']);
Route::post('cancel_status', [VisitController::class,'cancel_status']);
Route::post('approved', [VisitController::class,'approved_visit'])->name('approved');
Route::post('cancelled', [VisitController::class,'cancelled_visit']);
Route::post('booking-history', [VisitController::class,'booking_history']);
Route::get('/approve-status/{user_email}', [VisitController::class,'approve_status']);

//manage rent for admin
Route::get('admin/functional', [FunctionalHallController::class,'index']);


//User Page View
Route::view('user/my-profile', 'user.pages.my-profile');
Route::view('user/add-post', 'user.pages.newsfeed.add-post');
Route::view('add-members', 'user.pages.book-visitation.members');
Route::get('user/visit',[UserVisitController::class,'user_visit'] );



//Visit for user functions
Route::get('user/visit-form', [UserVisitController::class,'visit_form']);
Route::get('user/bookedvisit', [UserVisitController::class,'displayVisit']);
Route::post('user/book', [UserVisitController::class, 'reserve_visit']);
Route::post('add-members', [UserVisitController::class, 'add_members']);

//Rent Functional Hall
Route::view('user/rent', 'user.pages.rent-functional.functional-form');
Route::post('user/rent-submit', [UserFunctionalRoomController::class, 'rent_room']);
Route::get('user/rentedhall', [UserFunctionalRoomController::class,'displayRent']);
Route::post('rent/approve-status', [FunctionalHallController::class,'approve_status']);
Route::post('rent/cancel_status', [FunctionalHallController::class,'cancel_status']);
Route::post('rent/approved', [FunctionalHallController::class,'approved_visit']);
Route::post('rent/cancelled', [FunctionalHallController::class,'cancelled_visit']);
Route::post('rent/history', [FunctionalHallController::class,'rent_history']);
Route::view('rent-cancel-status-page', 'admin.pages.visit.rent-cancel-status');




//Newsfeed for user function
Route::get('user/home', [FeedController::class,'index']);
Route::post('post', [FeedController::class, 'add_post']);
// Route::get('user/image', [FeedController::class, 'retrieve_image']);


//Images
Route::post('user/upload', [ImagesController::class, 'upload']);

//



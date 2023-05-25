<?php

use App\Http\Controllers\Admin\AnnouncementController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Authentication\AuthController;
use App\Http\Controllers\ImagesController;
use App\Http\Controllers\User\FeedController;
use App\Http\Controllers\Admin\VisitController;
use App\Http\Controllers\Admin\FunctionalHallController;
use App\Http\Controllers\Admin\Home_Controller;
use App\Http\Controllers\CartController;
use App\Http\Controllers\Category;
use App\Http\Controllers\Inventory;
use App\Http\Controllers\User\UserVisitController;
use App\Http\Controllers\User\UserFunctionalRoomController;
use App\Http\Controllers\User\Comments_Controller;
use App\Http\Controllers\User\SouvenirsController;

//Auth
// Route::view('auth/login', 'auth.login');
Route::view('auth/forgot', 'auth.forgot_account');
Route::view('auth/reset-form', 'auth.reset-form');


// ----------------LANDING PAGE------------------ //

//Landing Page
Route::view('/', 'user.pages.landingpage.landingpage');

//About Nav Pages
Route::view('user/history', 'user.pages.landingpage.aboutpages.history');
Route::view('user/vnm', 'user.pages.landingpage.aboutpages.v&mis');
Route::view('user/oper', 'user.pages.landingpage.aboutpages.operation');

//Feed Nav Pages
Route::view('user/feed', 'user.pages.landingpage.feed');

//Contact Nav Pages
Route::view('user/contact', 'user.pages.landingpage.contactus');

//Services Nav Pages
Route::view('user/services', 'user.pages.landingpage.services');

//Review Nav Pages
Route::view('user/posts', 'user.pages.landingpage.reviewpages.posts');
Route::view('user/testimonials', 'user.pages.landingpage.reviewpages.testimonials');

Route::view('user/souvenirs', 'user.pages.landingpage.souvenirs.souvenirs');

// ----------------LANDING PAGE------------------ //

// ----------------LANDING PAGE 1------------------ //

//Landing Page
Route::view('user/landlog', 'user.pages.landingpage1.landingpage1');

Route::view('user/history1', 'user.pages.landingpage1.aboutpages.history1');
Route::view('user/vnm1', 'user.pages.landingpage1.aboutpages.v&mis1');
Route::view('user/oper1', 'user.pages.landingpage1.aboutpages.operation1');

//Feed Nav Pages
// Route::view('user/feed1', 'user.pages.landingpage1.feed1');

//Contact Nav Pages
Route::view('user/contact1', 'user.pages.landingpage1.contactus1');

//Services Nav Pages
Route::view('user/services1', 'user.pages.landingpage1.services1');

//Review Nav Pages
Route::view('user/posts1', 'user.pages.landingpage1.reviewpages.posts1');
Route::view('user/testimonials1', 'user.pages.landingpage1.reviewpages.testimonials1');

//Booking after Login
Route::view('user/bookvisit', 'user.pages.landingpage1.booking.bookvisit');
Route::view('user/rentconhall', 'user.pages.landingpage1.booking.rentconhall');

// Route::view('user/souvenirs1', 'user.pages.landingpage1.souvenirs.souvenirs1');

// ----------------LANDING PAGE 1------------------ //

// ----------------ADMIN SIDEBAR------------------ //

// Route::view('admin/home', 'admin.pages.home');
// Route::view('admin/profile', 'admin.pages.profile');
Route::view('admin/calendar', 'admin.pages.calendar');
Route::view('admin/inventory', 'admin.pages.inventory.inventory-table');

// Route::view('admin/announcement', 'admin.pages.announcement.announcement');

//---------------- User Profile ---------------------//

Route::view('user/profile', 'user.pages.profile.userprofile');
Route::view('user/mybookings', 'user.pages.profile.mybookings');
Route::view('user/visithistory', 'user.pages.profile.visithistory');

//---------------- User Profile ---------------------//




//Admin Page
// Route::view('admin/home', 'admin.pages.home');
Route::view('admin/form', 'admin.pages.form');


//User Page
// Route::view('user/home', 'user.pages.userhome');

// Route::view('myprofile', 'user.pages.profile.my-profile');


// Route::view('user/visit', 'user.pages.book-visitation.book');

//booked reservation
// Route::view('user/bookedvisit', 'user.pages.booked.bookedvisit');
Route::view('user/rentedhall', 'user.pages.booked.rentedhall');
// Route::view('admin/add-announcement', 'admin.pages.announcement.announcement');




Route::view('auth/register', 'auth.register');
Route::post('auth/register/verify', [AuthController::class, 'register'])->name('register'); //register
Route::get('auth/verify-account/{token}', [AuthController::class, 'verify_account']); //verifying the account
Route::post('auth/send-email',[AuthController::class, 'send_email']); //sending email
Route::get('auth/verify-reset/{token}', [AuthController::class, 'verify_reset']); //verifying the reset password
Route::post('auth/confirm-reset', [AuthController::class,'confirm_reset']); //confirming the reset link
Route::post('auth/login/user', [AuthController::class, 'login']); //login the user
Route::get('logout', [AuthController::class, 'logout']);
Route::get('logout-admin', [AuthController::class, 'logoutAdmin']);
Route::get('auth/login', [AuthController::class, 'log']);
Route::post('/update-user-profile', [AuthController::class, 'updateProfile']);
Route::post('/update-profile', [AuthController::class, 'updateAdminProfile']);
Route::get('user/profile', [AuthController::class, 'displayProfile']);
Route::get('admin/profile', [AuthController::class, 'displayAdminProfile']);


//Admin Page View
Route::get('admin/home', [VisitController::class, 'admin_home']);
Route::view('admin/form', 'admin.pages.form');
Route::view('admin/advance', 'admin.pages.advance');
Route::get('visits-charts', [Home_Controller::class, 'visualizeBookings']);
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
Route::view('user/add-post', 'user.pages.newsfeed.add-post');
Route::view('add-members', 'user.pages.book-visitation.members');




//Visit for user functions
Route::get('user/visit-form', [UserVisitController::class,'visit_form']);
Route::get('user/bookedvisit', [UserVisitController::class,'displayVisit']);
Route::post('user/book', [UserVisitController::class, 'reserve_visit']);
Route::post('add-members', [UserVisitController::class, 'add_members']);
Route::get('user/visit',[UserVisitController::class,'user_visit'] );
Route::post('user/cancel-visit',[UserVisitController::class,'cancel_visit'] );
Route::view('user/cancel-visit-form', 'user.pages.booked.cancel-user-visit');

//Rent Functional Hall
Route::view('user/rent', 'user.pages.rent-functional.functional-form');
Route::post('user/rent-submit', [UserFunctionalRoomController::class, 'rent_room']);
Route::get('user/rentedhall', [UserFunctionalRoomController::class,'displayRent']);
Route::post('rent/approve-status', [FunctionalHallController::class,'approve_status']);
Route::post('rent/cancel_status', [FunctionalHallController::class,'cancel_status']);
Route::post('rent/approved', [FunctionalHallController::class,'approved_rent']);
Route::post('rent/cancelled', [FunctionalHallController::class,'cancelled_rent']);
Route::post('rent/history', [FunctionalHallController::class,'rent_history']);
Route::view('rent-cancel-status-page', 'admin.pages.visit.rent-cancel-status');




//Newsfeed for user function
// Route::get('user/home', [FeedController::class,'index']);
Route::post('post', [FeedController::class, 'add_post']);
// Route::get('user/image', [FeedController::class, 'retrieve_image']);
// Route::get('user/feed1', [FeedController::class, 'index']);
Route::get('user/reviews', [FeedController::class, 'index']);
// Route::get('user/feed1', [FeedController::class, 'index_for_feed']);
Route::get('user/feed1', [FeedController::class, 'displayPostandComments']);
Route::get('user/myreview', [FeedController::class, 'displayReview']);


//Comments
Route::post('create-comment/{feed_id}', [Comments_Controller::class, 'create_comment']);
// Route::get('/feed/{post_id}', [Comments_Controller::class, 'displayComments']);



//Images
Route::post('user/upload', [ImagesController::class, 'upload']);

//Announcement
Route::post('/create-announcement', [AnnouncementController::class, 'create_announcement']);
// Route::get('admin/add-announcement', [AnnouncementController::class, 'displayAdminAvatar']);
Route::view('admin/add-announcement', 'admin.pages.announcement.announcement');
Route::get('admin/announcement', [AnnouncementController::class, 'displayAnnouncement']);
Route::post('archive-announcement', [AnnouncementController::class, 'archiveAnnouncement']);
Route::get('edit-announcement-form/{announcement_id}', [AnnouncementController::class, 'editAnnouncement']);
Route::put('update-announcement/{announcement_id}', [AnnouncementController::class, 'updateAnnouncement']);


//Souvenir
Route::post('/add-souvenir', [SouvenirsController::class, 'create_souvenir']);
Route::get('/souvenirs', [SouvenirsController::class, 'displaySouvenirs']);
Route::put('/update-souvenir/{souvenir_id}', [SouvenirsController::class, 'update_souvenir']);
Route::post('/archive-souvenir/{souvenir_id}', [SouvenirsController::class, 'archive_souvenir']);
Route::get('user/souvenirs1', [CartController::class, 'displaySouvenir']);




//Artifacts
Route::get('/artifacts', [Inventory::class, 'displayArtifacts']);
Route::post('/add-artifacts', [Inventory::class, 'create_artifact']);
Route::put('/update-artifacts/{artifact_id}', [Inventory::class, 'update_artifact']);


//Category
Route::get('/category', [Category::class, 'displayCategory']);
Route::post('/add-category', [Category::class, 'add_category']);
Route::post('/edit-category/{category_id}', [Category::class, 'edit_category']);
Route::post('/archive-category/{category_id}', [Category::class, 'archive_category']);


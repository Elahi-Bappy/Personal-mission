<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/registration',[\App\Http\Controllers\UserController::class,'registration'])->name('registrationUser');

Route::get('/login',[\App\Http\Controllers\UserController::class,'login'])->name('loginUser');

Route::post('/store',[\App\Http\Controllers\UserController::class,'store'])->name('storeUser');

Route::get('/admin',[\App\Http\Controllers\UserController::class,'admin'])->name('admin')->middleware( 'admin');

Route::get('/users',[\App\Http\Controllers\UserController::class,'user'])->name('users')->middleware( 'users');

Route::post('/login_dashboard',[\App\Http\Controllers\UserController::class,'loginDashboard'])->name('loginDashboard');

Route::get('/action',[\App\Http\Controllers\UserController::class,'action'])->name('actionFile')->middleware('actionMiddleware');

Route::put('/update/{id}',[\App\Http\Controllers\UserController::class,'update'])->name('updateUser');

Route::delete('/delete/{id}',[\App\Http\Controllers\UserController::class,'distroy'])->name('deleteUser');

Route::get('/logout',[\App\Http\Controllers\UserController::class,'logout'])->name('getLogout');
//Route::get('/requestUser',[\App\Http\Controllers\PersonalMissionController::class,'requestUser'])->name('updateRequest');
//Route::post('/userRequestUpdate',[\App\Http\Controllers\PersonalMissionController::class,'userRequestUpdate'])->name('requestForUpdate');


Route::get('/personal-mission-user', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUser'])->name('personalMissionUser');

Route::get('/personal-mission-dashboard', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionDashboard'])->name('personalMissionDashboard')->middleware('userPersonalMissionDashboardMiddleware');

Route::post('/personal-mission-create', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionCreate'])->name('personalMissionCreate');

Route::get('/personal-mission-admin-view', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminView'])->name('personalMissionAdminView')->middleware('personalMissionAdminViewMiddleware');

Route::get('/personal-mission-user-view', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserView'])->name('personalMissionUserView')->middleware('personalMissionUserViewMiddleware');

Route::put('/personal-mission-user-edit-request/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserEditRequest'])->name('personalMissionUserEditRequest');

Route::put('/personal-mission-user-accept-ignore/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminEditAcceptIgnoreRequest'])->name('personalMissionAdminEditAcceptIgnoreRequest');

Route::get('/personal-mission-user-mission-edit', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserMissionEditDashboard'])->name('personalMissionUserMissionEditDashboard');

Route::put('/personal-mission-user-mission-edit/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionUserMissionEdit'])->name('personalMissionUserMissionEdit');

Route::get('/personal-mission-admin-mission-edit', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminMissionEditDashboard'])->name('personalMissionAdminMissionEditDashboard');

Route::put('/personal-mission-admin-mission-update/{id}', [App\Http\Controllers\PersonalMissionController::class, 'personalMissionAdminMissionUpdate'])->name('personalMissionAdminMissionUpdate');

/* CV Application Route */

Route::get('/apply-cv-index',[\App\Http\Controllers\PersonalMissionController::class,'cvApplicationIndex'])->name('CvApplicationForm');

Route::post('/submit-information',[\App\Http\Controllers\PersonalMissionController::class,'cvInformationStore'])->name('cvInformationFormSubmit');

Route::get('/completed-cv',[\App\Http\Controllers\PersonalMissionController::class,'createdCvView'])->name('completedCvView');
//monthly rating start here

Route::get('/users-monthly-rating-dashboard',[\App\Http\Controllers\PersonalMissionController::class,'usersMonthlyRatingView'])->name('usersMonthlyRatingViewDashboard')->middleware('monthlyRating');

/* Delivery Route */

Route::get('shop',[\App\Http\Controllers\UserController::class,'shopIndex'])->name('newRepairDashboard');

Route::get('/shop/shop-post',[\App\Http\Controllers\DeliveryController::class,'postShop'])->name('shopPost');

Route::get('/users/shop-page',[\App\Http\Controllers\DeliveryController::class,'usersShopPage'])->name('shopPage');

Route::get('/shop-page/booking-registration',[\App\Http\Controllers\DeliveryController::class,'bookingRegistrationIndex'])->name('bookingRegistration');
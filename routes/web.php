<?php

use App\Http\Controllers\Admin\Booking\BookingController;
use App\Http\Controllers\Admin\Doctor\DoctorController;
use App\Http\Controllers\Front\Auth\LoginController;
use App\Http\Controllers\Front\Auth\RegisterController;
use App\Http\Controllers\Front\Contact\ContactController;
use App\Http\Controllers\Front\Doctor\DoctorController as DoctorDoctorController;
use App\Http\Controllers\Admin\Home\HomeController;
use App\Http\Controllers\Admin\Major\MajorController;
use App\Http\Controllers\Front\Major\MajorController as MajorMajorController;
use App\Http\Controllers\Front\Home\HomeController as HomeHomeController;
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
Route::resource('/home',HomeController::class);
Route::resource('clinic',HomeHomeController::class);
Route::resource('major',MajorController::class);
Route::resource('doctors',DoctorController::class);
Route::resource('booking',BookingController::class);
Route::resource('clinic-doctors',DoctorDoctorController::class);
Route::resource('login',LoginController::class);
Route::resource('register',RegisterController::class);
Route::resource('clinic-major',MajorMajorController::class);
Route::resource('contact',ContactController::class);
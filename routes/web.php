<?php

use App\Http\Controllers\Login;
use App\Http\Controllers\Register;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\HotelController;
use App\Http\Controllers\BookingController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\logout;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\WelcomeController;

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
    return view('index.index');
});

/* ////////////////////////LOGIN CONTROLLER//////////////////////// */

Route::get('/login', [Login::class, 'get_login'])->name('login');
Route::post('/login/store', [Login::class, 'set_login'])->name('login.store');

/* ////////////////////////REGISTER CONTROLLER//////////////////////// */

Route::get('/register', [Register::class, 'get_register'])->name('register');
Route::post('/register/store', [Register::class, 'set_register'])->name('register.store');


       
    /* ////////////////////////RESOURCES CONTROLLERS//////////////////////// */
    Route::resource('Admin', AdminController::class);
    Route::resource('Hotel', HotelController::class);
    Route::resource('Company', CompanyController::class);
    Route::resource('Program', ProgramController::class);
    Route::resource('Booking', BookingController::class);
    Route::resource('Guest', GuestController::class);
    
    /* ////////////////////////LOGOUT CONTROLLER//////////////////////// */
    Route::get('/logout', [logout::class, 'logout'])->name('logout.exits');
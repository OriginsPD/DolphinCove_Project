<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProgramsController;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('index');
// })->name('home');

Route::get('/admin-panel', function(){
   return view('admin'); 
})->name('admin-panel');

/**
 * To add Dynamic Information for the Frontend
 * Add Hotel
 * Add Company
 * Add Program
 * Add Excursion
 * 
 */
Route::get('/add-hotel', [AdminController::class, 'hotel'])->name('hotel');
Route::post('/add-hotel',[AdminController::class, 'addHotel'])->name('add-hotel');
Route::get('/add-company', [AdminController::class, 'company'])->name('company');
Route::post('/add-company',[AdminController::class, 'addCompany'])->name('add-company');
Route::get('/add-program', [AdminController::class, 'program'])->name('program');
Route::post('/add-program',[AdminController::class, 'addProgram'])->name('add-program');


// Programs Route
Route::resource('/programs', ProgramsController::class);
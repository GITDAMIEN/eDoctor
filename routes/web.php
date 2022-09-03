<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoctorController;
use App\Http\Controllers\PublicController;

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


// PUBLIC CONTROLLER
Route::get('/', [PublicController::class, 'welcome'])->name('welcome');
Route::get('/allDoctors', [PublicController::class, 'allDoctors'])->name('allDoctors');
Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('aboutUs');
Route::get('/contactUs', [PublicController::class, 'contactUs'])->name('contactUs');
Route::get('/doctorDetails/{doctor}', [PublicController::class, 'doctorDetails'])->name('doctorDetails');
Route::get('/searchDoctor', [PublicController::class, 'searchDoctor'])->name('searchDoctor');
Route::post('/contactForm', [PublicController::class, 'contactForm'])->name('contactForm');


// DOCTOR CONTROLLER
Route::get('/newDoctor', [DoctorController::class, 'newDoctor'])->middleware('auth')->name('newDoctor');
Route::post('/createDoctor', [DoctorController::class, 'createDoctor'])->middleware('auth')->name('createDoctor');
Route::get('/editDoctor/{doctor}', [DoctorController::class, 'editDoctor'])->middleware('auth')->name('editDoctor');
Route::put('/submitChanges/{doctor}', [DoctorController::class, 'submitChanges'])->middleware('auth')->name('submitChanges');
Route::delete('/deleteDoctor/{doctor}', [DoctorController::class, 'deleteDoctor'])->middleware('auth')->name('deleteDoctor');

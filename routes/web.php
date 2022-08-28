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
Route::get('/newDoctor', [PublicController::class, 'newDoctor'])->name('newDoctor');
Route::get('/aboutUs', [PublicController::class, 'aboutUs'])->name('aboutUs');


// DOCTOR CONTROLLER
Route::post('/createDoctor', [DoctorController::class, 'createDoctor'])->name('createDoctor');


<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\TaskController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\TimelineController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\IncomingRequestController;

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
    return redirect(auth()->check() ? 'dashboard' : 'login');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('login', 'login')->name('login')->middleware('guest');
    Route::post('auth', 'auth')->name('auth')->middleware('guest');
    Route::post('logout', 'logout')->name('logout');
});

Route::middleware(['auth', 'role:admin,user'])->group(function () {

    
    Route::middleware(['auth', 'role:admin'])->group(function () {
        
        Route::post('/users/csv', [UserController::class, 'csv'])->name('users.csv');
        Route::resource('users', UserController::class);
        Route::resource('forms', FormController::class);
        Route::resource('report', ReportController::class);
    });
    
    Route::resource('dashboard', DashboardController::class);
    Route::resource('profile', ProfileController::class);
    Route::resource('requests', IncomingRequestController::class);
    Route::resource('timeline', TimelineController::class);
    Route::resource('task', TaskController::class);
    
});

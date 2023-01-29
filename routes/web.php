<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TherapistController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

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
    return view('welcome');
});

Auth::routes();

Route::group(['middleware=' => 'auth'], function() {
    
    //admin
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'isAdmin',
        'as' => 'admin',
    ], function() {
        Route::get('/admin-home', [AdminController::class, 'index'])->name('adminHome');
        Route::get('/admin-dashboard', [AdminController::class, 'adminDashboard'])->name('adminDashboard');

    });

    //user
    Route::group([
        'prefix' => 'user',
        'as' => 'user',
    ], function() {
        Route::get('/user-home', [UserController::class, 'index'])->name('userHome');
        Route::get('/user-dashboard', [UserController::class, 'userDashboard'])->name('userDashboard');

        //Post
        Route::post('/save-post', [UserController::class, 'savePost'])->name('savePost');
    });

    //therapist
    Route::group([
        'prefix' => 'therapist',
        'as' => 'therapist',
    ], function() {
        Route::get('/therapist-home', [TherapistController::class, 'index'])->name('therapistHome');
        Route::get('/therapist-approval-page', [TherapistController::class, 'therapistApprovalFormView'])->name('therapistApprovalFormView');
    });
    
});
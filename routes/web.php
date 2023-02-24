<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TherapistController;
use App\Http\Controllers\ChartController;
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
Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');



Route::get('/therapist-dashboard', [TherapistController::class, 'therapistDashboard'])->name('therapistDashboard');

Auth::routes();

Route::group(['middleware=' => 'auth'], function() {
    
    //admin
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'isAdmin',
        'as' => 'admin',
    ], function() {
        Route::get('/admin-home', [AdminController::class, 'index'])->name('adminHome');
        Route::get('/admin-tables', [AdminController::class, 'adminTables'])->name('adminTables');
        Route::get('/admin-layout', [AdminController::class, 'adminLayout'])->name('adminLayout');
        
        Route::get('/edit-admin/{id}', [AdminController::class, 'editAdmin'])->name('editAdmin');
        Route::get('/edit-user/{id}', [AdminController::class, 'editUser'])->name('editUser');
        
        Route::post('/edit-user', [AdminController::class, 'update'])->name('update');        
        Route::get('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
    });

    //user
    Route::group([
        'prefix' => 'user',
        'middleware' => 'isUser',
        'as' => 'user',
    ], function() {
        Route::get('/user-home', [UserController::class, 'index'])->name('login');
        Route::get('/user-dashboard', [UserController::class, 'userDashboard'])->name('userDashboard');

        //Post CRUD
        Route::post('/save-post', [UserController::class, 'savePost'])->name('savePost');
        Route::get('/delete-post/{id}', [UserController::class, 'deletePost'])->name('deletePost');

        //Display post
        Route::get('/display/post/{id}',[UserController::class,'displaypost'])->name('displayPost');

        //edit post
        Route::get('/edit/post/{id}',[UserController::class,'editpost'])->name('editPost');
        Route::post('/edit/edit-post',[UserController::class,'updatepost'])->name('editPost.edit');

        //like post
        Route::post('/like-post',[UserController::class,'likePost']);


        //profile 
        Route::get('/profile/{id}',[UserController::class,'profilepage'])->name('profile');

       
      
       
    });

    //therapist
    Route::group([
        'prefix' => 'therapist',
        'middleware' => 'isTherapist',
        'as' => 'therapist',
    ], function() {
        Route::get('/therapist-home', [TherapistController::class, 'index'])->name('login');
        Route::get('/therapist-approval-page', [TherapistController::class, 'therapistApprovalFormView'])->name('therapistApprovalFormView');
    });
    
});
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
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
})->name('welcome');
Route::get('/register', [RegisterController::class, 'register'])->name('register');

Route::get('/contact', [ContactController::class, 'contact'])->name('contact');
Route::post('/save-message', [ContactController::class, 'saveMessage'])->name('saveMessage');


Auth::routes();

Route::group(['middleware=' => 'auth'], function() {
    
    //admin
    Route::group([
        'prefix' => 'admin',
        'middleware' => 'isAdmin',
        'as' => 'admin',
    ], function() {
        Route::get('/admin-home', [AdminController::class, 'index'])->name('adminHome');
        Route::get('/admin-account', [AdminController::class, 'accountView'])->name('AccountView');
        
        // TABLES
        Route::get('/admin-table', [AdminController::class, 'tableAdmin'])->name('tableAdmin');
        Route::get('/user-table', [AdminController::class, 'tableUser'])->name('tableUser');
        Route::get('/post-table', [AdminController::class, 'tablePost'])->name('tablePost');

        Route::get('/admin-charts', [AdminController::class, 'adminCharts'])->name('adminCharts');
        Route::get('/edit-admin', [AdminController::class, 'editAdmin'])->name('editAdmin');
        
        Route::get('/edit-user/{id}', [AdminController::class, 'editUser'])->name('editUser');
        Route::post('/edit-user-po', [AdminController::class, 'editUserPo'])->name('editUserPo');
        
        Route::post('/edit-user', [AdminController::class, 'update'])->name('adminUpdate');        
        Route::get('/delete-user/{id}', [AdminController::class, 'deleteUser'])->name('deleteUser');
        Route::get('/delete-post-admin/{id}', [AdminController::class, 'deletePostAdmin'])->name('deletePostAdmin');
    
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

        Route::get('/deleteimg/{img?}/{postid?}',[UserController::class,'deleteimage'])->name('deleteimg');

        //like post
        Route::post('/like-post',[UserController::class,'likePost']);


        //profile 
        Route::get('/profile/{id}',[UserController::class,'profilepage'])->name('profile');

       //settings
       Route::get('/setting/{id}',[UserController::class,'setting'])->name('settings');
        
       //edit userprofile
       Route::post('/edit/user',[UserController::class,'editprofile'])->name('editprofile.edit');

      

       //change password
       Route::post('/changepassword',[UserController::class,'changepass'])->name('changepassword');


       //setting delete user
       Route::get('/delete/{id}', [UserController::class, 'deleteuse'])->name('deleteuse');
       

   
    });
    
    //comments
    
    Route::post('/comment',[CommentController::class, 'commentstore'])->name('comment');

    
});
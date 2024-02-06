<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CommentController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ReplyController;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

// group the following routes by auth middleware - you have to be signed-in to proceeed
Route::group(['middleware' => 'auth'], function() {
	// Dashboard
	Route::get('/home', [HomeController::class, 'index'])->name('home');

	// Posts resourcefull controllers routes
	Route::resource('posts', PostController::class);

	// Comments routes
	Route::group(['prefix' => '/comments', 'as' => 'comments.'], function() {
        // store comment route
		Route::post('/{post}', [CommentController::class, 'store'])->name('store');
	});

	// Replies routes
	Route::group(['prefix' => '/replies', 'as' => 'replies.'], function() {
        // store reply route
		Route::post('/{comment}', [ReplyController::class, 'store'])->name('store');
	});

	// Update v10
    	Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    	Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    	Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

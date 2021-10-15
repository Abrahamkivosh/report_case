<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\CommentController;
use App\Http\Controllers\ComplaintController;

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
    return redirect()->route('login');
});

Auth::routes();

Route::get('/home',[HomeController::class,'index'])->name('home');

// Complaints
// Route::get('complaints',[ComplaintController::class, 'index'])->name('complaint.index');
// Route::get('/single',[ComplaintController::class,'show'])->name('complaint.show');
// Route::get('create',[ComplaintController::class,'create'])->name('complaint.create');
Route::middleware(['auth'])->group(function () {
    Route::post('complaint/action/{complaint}',[ComplaintController::class,'actionTaken'])->name('complaint.action.taken');
    Route::resource('complaints', ComplaintController::class);
    // Route::resource('comments', CommentController::class);
    Route::post('comments/{complaint}',[CommentController::class,'store'])->name("comments.store") ;
    Route::delete('comments/delete/{comment}',[CommentController::class,'destroy'])->name("comments.destroy") ;
    Route::put('/store/{id}',[UserController::class,'update'])->name('update.user');
    Route::get('/edit/{id}',[UserController::class,'edit'])->name('edit.user');
    Route::get('profile/{id}',[UserController::class, 'show'])->name('show.user');

});

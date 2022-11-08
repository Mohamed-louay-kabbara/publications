<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\CommentController;

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
    return view('auth.login');
});
Route::get('sweet-alert', function () {
    return view('sweet-alert');
});
Route::get('register', function () {
    return view('auth.register');
})->name('register');
Route::get('/dashboard', [PostController::class,'indexposts'
])->middleware(['auth', 'verified'])->name('dashboard');
require __DIR__.'/auth.php';
Route::get('addpost', function () {
    return view('addpost');
})->name('addpost');
Route::post('save', [PostController::class,'store'])->name('post.store');

Route::post('editprofile/{id}', [CommentController::class,'update'])->name('editprofile');
Route::post('saveComment', [CommentController::class,'store'])->name('comm');
Route::get('show/{id}', [PostController::class,'show'])->name('post.show');
Route::get('Editprofile/{id}', [CommentController::class,'edit'])->name('editpro');
Route::get('postscomment/{id}', [CommentController::class,'index'])->name('posts.comment');
Route::get('showNot/{id}', [PostController::class,'showNot'])->name('showNot');
Route::get('mypost', [PostController::class,'index'])->name('mypost');
Route::get('Comment/{id}', [PostController::class,'comment'])->name('comment');
Route::get('notifRead', [PostController::class,'notifRead'])->name('notifRead');
Route::get('edit/{id}', [PostController::class,'edit'])->name('posts.edit');
Route::post('saveedit/{id}', [PostController::class,'update'])->name('editpost');
Route::post('deletef/{id}', [PostController::class,'forcedelete'])->name('fdelete');
Route::delete('deletecomment/{id}', [CommentController::class,'destroy'])->name('post.comment');
Route::delete('delete/{id}', [PostController::class,'destroy'])->name('post.delete');
Route::get('shere/{id}', [PostController::class,'like'])->name('shere');
Route::get('entshere/{id}', [PostController::class,'notlike'])->name('entshere');
Route::get('showPost', [PostController::class,'showPost'])->name('showPost');
Route::get('showNot/{id}', [PostController::class,'showNot'])->name('showNot');

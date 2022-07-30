<?php

use App\Http\Controllers\En\AboutController;
use App\Http\Controllers\En\AdminPostController;
use App\Http\Controllers\En\HomeController;
use App\Http\Controllers\En\PostCommentsController;
use App\Http\Controllers\En\PostController;
use App\Http\Controllers\En\RegisterController;
use App\Http\Controllers\En\SessionsController;
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
Route::group(['namespace' => 'En'], function(){
    Route::get('/',[HomeController::class, 'index'])->name('home');

    Route::get('/about',[AboutController::class, 'index']);

    Route::get('/calendar',[AboutController::class, 'calendar']);

    Route::get('/posts',[PostController::class, 'index']);

    Route::get('posts/{post:slug}',[PostController::class, 'show']);
    Route::post('posts/{post:slug}/comments', [PostCommentsController::class, 'store']);

    Route::get('register', [RegisterController::class, 'create'])->middleware('guest');
    Route::post('register', [RegisterController::class, 'store'])->middleware('guest');

    Route::get('login', [SessionsController::class, 'create'])->middleware('guest');
    Route::post('login', [SessionsController::class, 'store'])->middleware('guest');

    Route::post('logout', [SessionsController::class, 'destroy'])->middleware('auth');

// Admin
    Route::middleware('can:admin')->group(function (){
        Route::get('admin/posts', [AdminPostController::class, 'index']);
        Route::post('admin/posts', [AdminPostController::class, 'store']);
        Route::get('admin/posts/create', [AdminPostController::class, 'create']);
        Route::get('admin/posts/{post}/edit', [AdminPostController::class, 'edit']);
        Route::patch('admin/posts/{post}', [AdminPostController::class, 'update']);
        Route::delete('admin/posts/{post}', [AdminPostController::class, 'destroy']);
    });
});
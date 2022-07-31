<?php

use App\Http\Controllers\En\AboutController;
use App\Http\Controllers\En\AdminPostController;
use App\Http\Controllers\En\HomeController;
use App\Http\Controllers\En\PostCommentsController;
use App\Http\Controllers\En\PostController;
use App\Http\Controllers\En\RegisterController;
use App\Http\Controllers\En\SessionsController;
use App\Http\Controllers\Es\EsAboutController;
use App\Http\Controllers\Es\EsAdminPostController;
use App\Http\Controllers\Es\EsHomeController;
use App\Http\Controllers\Es\EsPostCommentsController;
use App\Http\Controllers\Es\EsPostController;
use App\Http\Controllers\Es\EsRegisterController;
use App\Http\Controllers\Es\EsSessionsController;
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

    Route::get('/about-us',[AboutController::class, 'index']);

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

Route::group(['namespace' => 'Es'], function(){
    Route::get('/es',[EsHomeController::class, 'index'])->name('home');

    Route::get('/es/about-us',[EsAboutController::class, 'index']);

    Route::get('/es/calendar',[EsAboutController::class, 'calendar']);

    Route::get('/es/posts',[EsPostController::class, 'index']);

    Route::get('/es/posts/{post:slug}',[PEsostController::class, 'show']);
    Route::post('/es/posts/{post:slug}/comments', [EsPostCommentsController::class, 'store']);

    Route::get('/es/register', [EsRegisterController::class, 'create'])->middleware('guest');
    Route::post('/es/register', [EsRegisterController::class, 'store'])->middleware('guest');

    Route::get('/es/login', [EsSessionsController::class, 'create'])->middleware('guest');
    Route::post('/es/login', [EsSessionsController::class, 'store'])->middleware('guest');

    Route::post('/es/logout', [EsSessionsController::class, 'destroy'])->middleware('auth');

// Admin
    Route::middleware('can:admin')->group(function (){
        Route::get('/es/admin/posts', [EsAdminPostController::class, 'index']);
        Route::post('/es/admin/posts', [EsAdminPostController::class, 'store']);
        Route::get('/es/admin/posts/create', [EsAdminPostController::class, 'create']);
        Route::get('/es/admin/posts/{post}/edit', [EsAdminPostController::class, 'edit']);
        Route::patch('/es/admin/posts/{post}', [EsAdminPostController::class, 'update']);
        Route::delete('/es/admin/posts/{post}', [EsAdminPostController::class, 'destroy']);
    });
});
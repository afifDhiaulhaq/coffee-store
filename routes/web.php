<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DashboardPostController;
use App\Http\Controllers\GuestController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RegisterController;
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

Route::get('/', [GuestController::class,'index']);

Route::get('/login', [LoginController::class, 'index'])->middleware('guest')->name('login');
Route::post('/login', [LoginController::class, 'authenticate']);

Route::get('/logout', [LoginController::class, 'logout']);
Route::post('/logout', [LoginController::class, 'logout']);

Route::get('/register', [RegisterController::class, 'index'])->middleware('guest');
Route::post('/register', [RegisterController::class, 'store']);

Route::get('/dashboard', [DashboardController::class, 'index'])->middleware('role:superadmin,admin');
// dashboard menu
Route::get('/dashboard/products',[ProductController::class,'index'])->middleware('role:superadmin,admin');
Route::post('/dashboard/products/add', [ProductController::class, 'store']);
Route::get('/dashboard/products/delete/{product:id}', [ProductController::class, 'delete']);
Route::get('/dashboard/products/edit/{product:id}', [ProductController::class, 'showData']);
Route::post('/dashboard/products/update/{product:id}', [ProductController::class, 'update']);
// post
Route::get('/dashboard/posts/checkSlug', [DashboardPostController::class, 'checkSlug'])->middleware('role:superadmin,admin');
Route::post('/dashboard/posts/attachImage', [DashboardPostController::class, 'attachImage'])->middleware('role:superadmin,admin');
Route::resource('/dashboard/posts', DashboardPostController::class)->middleware('role:superadmin,admin');

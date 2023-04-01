<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\DashboardController;

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


Route::get('/users', function () {
    return view('users.index');
})->name('users.home');

Route::get('/user/{id}', [UserController::class,'show'])->name('users.details');
Route::get('/user/{id}/edit', [UserController::class,'edit'])->name('users.edit');

Route::prefix('/dashboard')->middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard.index');
    Route::get('/category', [DashboardController::class,'category'])->name('dashboard.category');
    Route::get('/category/{id}/edit', [DashboardController::class,'category_id'])->name('dashboard.category_edit');
    Route::get('/product', [DashboardController::class,'product'])->name('dashboard.product');
    Route::get('/product/{id}/edit', [DashboardController::class,'product_edit'])->name('dashboard.product_edit');
    Route::get('/user', [DashboardController::class,'user'])->name('dashboard.user');
    Route::get('/user/id/edit', [DashboardController::class,'edit_user'])->name('dashboard.edit_user');
});
Route::get('/logout', [DashboardController::class,'index'])->name('logout')->middleware(['auth:sanctum', config('jetstream.auth_session'),
'verified']);

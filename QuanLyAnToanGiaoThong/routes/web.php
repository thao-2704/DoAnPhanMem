<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\DanhmucController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginController;
use Illuminate\Database\Schema\IndexDefinition;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use Illuminate\Auth\Events\Login;

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

Route::resource('/', HomeController::class);
Route::resource('/taikhoan', UserController::class);
Route::resource('/taikhoan', UserController::class);
Route::resource('/danhmuc', DanhmucController::class);

// login and logout routes
Route::post('/login', LoginController::class)->name('login');

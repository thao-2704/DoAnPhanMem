<?php

use App\Http\Controllers\AdminController;
<<<<<<< HEAD
use app\Http\Controllers\CanhSatGiaoThongController;
use App\Http\Controllers\HomeController;
=======
use App\Http\Controllers\DanhmucController;
>>>>>>> 754c4b03cfb1e4e68effa7e96a22e1717f728b46
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

<<<<<<< HEAD
Route::resource('/', HomeController::class);
Route::resource('/taikhoan', UserController::class);
=======
// Route::get('/', function () {
//     return view('admin.index');
// });

Route::resource('/', UserController::class);
Route::resource('/taikhoan', UserController::class);


Route::resource('/danhmuc', DanhmucController::class);

>>>>>>> 754c4b03cfb1e4e68effa7e96a22e1717f728b46

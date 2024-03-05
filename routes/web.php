<?php

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

// Route cho trang đăng ký người dùng
Route::get('/users/register', [RegisterController::class, 'getForm'])->name('user.register.form');
Route::post('/users', [RegisterController::class, 'createUser'])->name('user.register.submit');
// Route cho trang hiển thị thông tin người dùng
Route::get('/users', [RegisterController::class, 'getView'])->name('user.info');

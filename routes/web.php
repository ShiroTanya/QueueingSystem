<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;



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

//Login Page
Route::get('/', function () {
    return view('admin.login');
});


//Recovery Password
Route::get('/forgot-password', [AdminController::class, 'forgot_password']);
Route::get('/recover-pass', [AdminController::class, 'recover_pass']);
Route::get('/update-new-pass', [AdminController::class, 'update_new_pass']);
Route::get('/reset-new-pass', [AdminController::class, 'reset_new_pass']);
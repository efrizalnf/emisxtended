<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Login;
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

Route::get('/table', [AdminController::class, 'table']);

Route::get('/login', function(){
    return view('app.login');
});

Route::post('/dashboard', [AdminController::class, 'index'])->name('dashboard');
// Route::post('/postlogin', [Login::class, 'postlogin'])->name('postlogin');

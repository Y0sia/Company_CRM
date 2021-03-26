<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoteController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/company/{alias}', [CompanyController::class, 'index'])->name('company.index');
Route::group(['middleware' => 'guest'], function() {
    Route::get('/login', [UserController::class, 'loginForm'])->name('users.create-login');
    Route::post('/login', [UserController::class, 'login'])->name('users.login');
    Route::get('/register', [UserController::class, 'registerForm'])->name('users.create-register');
    Route::post('/register', [UserController::class, 'register'])->name('users.register');
});
Route::group(['middleware' => 'auth'], function() {
   Route::get('/logout', [UserController::class, 'logout'])->name('users.logout');
   Route::post('/company', [CompanyController::class, 'create'])->name('company.create');
   Route::post('/note', [NoteController::class, 'create'])->name('note.create');
});

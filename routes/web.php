<?php

use Illuminate\Support\Facades\Route;
use App\Http\controllers\ProcessUser;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UpdateController;
use App\Http\Controllers\CustomAuthController;


Route::get('/register', [ProcessUser::class, 'showRegistrationForm'])->name('register.form');
Route::post('/register', [ProcessUser::class, 'saveData'])->name('register.save');
Route::view('update','update_profile');

Route::view('add','addbook');






Route::get('/edit-profile', [UpdateController::class, 'editProfile'])->name('edit.profile');
Route::post('/update-profile', [UpdateController::class, 'updateProfile'])->name('update.profile');

Route::post('/delete-account', [CustomAuthController::class, 'deleteAccount'])->name('delete.account');


Route::get('/login', [CustomAuthController::class, 'login'])->name('login');
Route::post('/login-user', [CustomAuthController::class, 'loginuser'])->name('login-user');

Route::get('/dashboard', [CustomAuthController::class, 'dashdata'])->name('dashboard');
Route::get('/logout', [CustomAuthController::class, 'logout'])->name('logout');




Route::post('/addbook', [AdminController::class, 'addbook'])->name('admin.addbook');
Route::post('/assignbook', [AdminController::class, 'assignbook'])->name('admin.assignbook');
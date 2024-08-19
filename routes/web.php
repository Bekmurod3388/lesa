<?php

use App\Http\Controllers\ClientController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class,'loginPage'])->name('loginPage');
Route::post('login', [LoginController::class, 'login'])->name('login');
Route::group(['middleware' => 'auth'], function () {
    Route::get('/', [DashboardController::class, 'dashboard'])->name('dashboard');

    Route::resource('clients', ClientController::class);
    Route::resource('services', ServiceController::class);
    Route::get('client/{client}/rents',[ClientController::class,'rents'])->name('client.rents');

    Route::resource('users', UserController::class);

    Route::get('my_profile', [ProfileController::class, 'index'])->name('profile.index');
    Route::post('my_profile/update', [ProfileController::class, 'update'])->name('profile.update');
    Route::post('logout', [LoginController::class, 'logout'])->name('logout');
});


<?php

use App\Http\Controllers\LoginController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('login', [LoginController::class,'loginPage'])->name('loginPage');
Route::post('login', [LoginController::class, 'login'])->name('login');

<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::get('/logout', [UserController::class, 'logout'])->name('user.logout');

Route::get('/test', function (){
    return view('overview');
})->name('test');

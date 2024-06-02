<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
Route::get('/logout', [ProfileController::class, 'logout'])->name('profile.logout');

Route::get('/test', function (){
    return view('overview');
})->name('test');

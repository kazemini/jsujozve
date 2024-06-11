<?php

use App\Http\Controllers\CreateDocumentController;
use App\Http\Controllers\DocumentManagementController;
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
Route::get('/document',[CreateDocumentController::class,'index'])->name('document.index');
Route::post('/document/create',[CreateDocumentController::class,'create'])->name('document.create');
Route::get('/document/manage',[DocumentManagementController::class,'index'])->name('document.management');
Route::get('/test', function (){
    return view('overview');
})->name('test');

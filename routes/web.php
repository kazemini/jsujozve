<?php

use App\Http\Controllers\CreateDocumentController;
use App\Http\Controllers\DocumentManagementController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckAuthor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/profile', [ProfileController::class, 'index'])->name('profile')->middleware('auth');
Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update')->middleware('auth');
Route::get('/logout', [ProfileController::class, 'logout'])->name('profile.logout')->middleware('auth');
Route::get('/document', [CreateDocumentController::class, 'index'])->name('document.index')->middleware('auth');
Route::post('/document/create', [CreateDocumentController::class, 'create'])->name('document.create')->middleware('auth');
Route::get('/document/manage', [DocumentManagementController::class, 'index'])->name('document.management')->middleware('auth');
Route::delete('/document/{document}', [DocumentManagementController::class, 'destroy'])->name('document.delete')->middleware('auth', CheckAuthor::class);
Route::get('/test', function () {
    return view('overview');
})->name('test');

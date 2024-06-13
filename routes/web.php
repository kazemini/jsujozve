<?php

use App\Http\Controllers\CreateDocumentController;
use App\Http\Controllers\DocumentController;
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
Route::get('/document/{document}/edit', [DocumentManagementController::class, 'edit'])->name('document.edit')->middleware(['auth', 'can:manage-document,document']);
Route::post('/document/{document}', [DocumentManagementController::class, 'update'])->name('document.update')->middleware(['auth', 'can:manage-document,document']);
Route::delete('/document/{document}', [DocumentManagementController::class, 'destroy'])->name('document.delete')->middleware(['auth', 'can:manage-document,document']);
Route::get('/document/logs/{document}', [DocumentManagementController::class, 'logs'])->name('document.logs')->middleware(['auth']);

Route::get('/document/explore', [DocumentController::class, 'index'])->name('document.explore');
Route::post('/document/{document}/like', [DocumentController::class, 'like'])->name('document.like')->middleware('auth');
Route::get('/document/{document}/public-edit', [DocumentController::class, 'edit'])->name('document.public-edit')->middleware(['auth', 'can:manage-document,document']);
Route::post('/document/{document}/public-update', [DocumentController::class, 'update'])->name('document.public-update')->middleware(['auth']);


Route::get('/test', function () {
    return view('overview');
})->name('test');

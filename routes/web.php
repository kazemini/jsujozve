<?php

use App\Http\Controllers\CreateDocumentController;
use App\Http\Controllers\DocumentController;
use App\Http\Controllers\DocumentForumController;
use App\Http\Controllers\DocumentManagementController;
use App\Http\Controllers\ForumController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\ProfileController;
use App\Http\Middleware\CheckAuthor;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProfileController::class, 'index'])->name('profile')->middleware('auth');

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

Route::get('/bookmarks', [DocumentController::class, 'bookmarks'])->name('bookmarks')->middleware(['auth']);


Route::get('/forum/index', [ForumController::class, 'index'])->name('forum.management')->middleware('auth');
Route::get('/forum/create', [ForumController::class, 'create'])->name('forum.create')->middleware('auth');
Route::post('/forum/store', [ForumController::class, 'store'])->name('forum.store')->middleware('auth');
Route::get('/forum/edit/{forum}', [ForumController::class, 'edit'])->name('forum.edit')->middleware(['auth', 'can:manage-forum,forum']);
Route::post('/forum/update/{forum}', [ForumController::class, 'update'])->name('forum.update')->middleware(['auth', 'can:manage-forum,forum']);
Route::delete('/forum/{forum}', [ForumController::class, 'destroy'])->name('forum.delete')->middleware(['auth', 'can:manage-forum,forum']);
Route::get('/forum/explore', [ForumController::class, 'explore'])->name('forum.explore')->middleware('auth');
Route::post('/forum/{forum}/subscribe', [ForumController::class, 'subscribe'])->name('forum.subscribe')->middleware(['auth', 'can:subscribe,forum']);


Route::get('/posts/{forum}', [PostController::class, 'index'])->name('post.management')->middleware(['auth', 'can:manage-forum,forum']);
Route::post('/posts/store/{forum}', [PostController::class, 'store'])->name('post.store')->middleware(['auth', 'can:manage-forum,forum']);
Route::get('/posts/edit/{forum}/{post}', [PostController::class, 'edit'])->name('post.edit')->middleware(['auth', 'can:manage-post,forum,post']);
Route::post('/posts/update/{forum}/{post}', [PostController::class, 'update'])->name('post.update')->middleware(['auth', 'can:manage-post,forum,post']);
Route::delete('/posts/delete/{forum}/{post}', [PostController::class, 'destroy'])->name('post.delete')->middleware(['auth', 'can:manage-post,forum,post']);
Route::get('/post/explore', [PostController::class, 'explore'])->name('post.explore')->middleware('auth');

Route::get('/forum-documents/add-document/{forum}', [DocumentForumController::class, 'addDocument'])->name('document-forum.add-document')->middleware(['auth']);
Route::get('/forum-documents/remove-document/{forum}', [DocumentForumController::class, 'removeDocument'])->name('document-forum.remove-document')->middleware(['auth']);
Route::post('/forum-documents/attach/{forum}/{document}', [DocumentForumController::class, 'attach'])->name('document-forum.attach')->middleware(['auth', 'can:manage-forum,forum']);
Route::post('/forum-documents/detach/{forum}/{document}', [DocumentForumController::class, 'detach'])->name('document-forum.detach')->middleware(['auth', 'can:manage-forum,forum']);

Route::get('/test', function () {
    return view('overview');
})->name('test');

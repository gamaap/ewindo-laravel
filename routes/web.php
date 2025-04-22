<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\RegisteredAdminController;

// user section
Route::get('/', function () {
    return view('users.index');
});

Route::get('/company', function () {
    return view('users.company');
});

Route::get('/newsroom', [NewsroomController::class, 'index']);
Route::get('/newsroom/{category:slug}', [NewsroomController::class, 'filter']);
Route::get('/categories/{newroom:slug}', [NewsroomController::class, 'show']);
Route::get('/newsroom/{newroom:slug}', [NewsroomController::class, 'show']);

Route::get('/contact', [ContactController::class, 'index']);
Route::post('/contact', [ContactController::class, 'store']);

Route::get('/careers', [CareerController::class, 'index']);
Route::get('/careers/{job}/apply', [CareerController::class, 'create']);
Route::post('/careers', [CareerController::class, 'store']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{product}', [ProductController::class, 'show']);
Route::post('/products/{product}', [ProductController::class, 'store']);
Route::get('/products/{product}/request-a-quotation', [ProductController::class, 'create']);

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

// Route::get('/register', [RegisteredAdminController::class, 'index']);
// Route::post('/register', [RegisteredAdminController::class, 'store']);

// admin section
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('admin.index');
    });

    Route::get('/products', [ProductController::class, 'index']);
    Route::post('/products', [ProductController::class, 'store']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/{product}', [ProductController::class, 'show']);
    
    Route::get('/newsroom', [NewsroomController::class, 'index']);
    Route::post('/newsroom', [NewsroomController::class, 'store']);
    Route::get('/newsroom/create', [NewsroomController::class, 'create']);
    Route::get('/newsroom/{slug}', [NewsroomController::class, 'show']);
});
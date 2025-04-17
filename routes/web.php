<?php


use Illuminate\Support\Arr;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JobController;
use App\Http\Controllers\PressController;
use App\Http\Controllers\CareerController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\NewsroomController;
use App\Http\Controllers\RegisteredAdminController;
use App\Models\Career;

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

Route::get('/careers', [JobController::class, 'index']);
Route::get('/careers/{job:slug}/apply', [CareerController::class, 'create']);
Route::post('/careers', [jobController::class, 'store']);

Route::get('/products', [ProductController::class, 'index']);
Route::get('/products/{slug}', [ProductController::class, 'show']);
Route::post('/products/{slug}', [ProductController::class, 'store']);
Route::get('/products/{slug}/request-a-quotation', [ProductController::class, 'create']);

Route::get('/login', [SessionController::class, 'index'])->name('login');
Route::post('/login', [SessionController::class, 'store']);
Route::delete('/logout', [SessionController::class, 'destroy'])->middleware('auth');

Route::get('/register', [RegisteredAdminController::class, 'index']);
Route::post('/register', [RegisteredAdminController::class, 'store']);

// admin section
Route::prefix('admin')->middleware('auth')->group(function() {
    Route::get('/', function() {
        return view('admin.index');
    });

    Route::get('/products', [ProductController::class, 'index']);
    Route::get('/products/create', [ProductController::class, 'create']);
    Route::get('/products/{slug}', [ProductController::class, 'show']);
    
    Route::get('/newsroom/checkSlug', [NewsroomController::class, 'checkSlug']);
    Route::get('/newsroom', [NewsroomController::class, 'index']);
    Route::get('/newsroom/create', [NewsroomController::class, 'create']);
    Route::post('/newsroom', [NewsroomController::class, 'store']);
    Route::get('admin/newsroom/{slug}', [NewsroomController::class, 'show']);
    Route::get('/newsroom/{newroom:slug}', [NewsroomController::class, 'show']);
    Route::delete('/newsroom/{newsroom:slug}', [NewsroomController::class, 'destroy'])->name('newsroom.destroy');
    Route::get('/newsroom/{newsroom:slug}/edit', [NewsroomController::class, 'edit']);
    Route::put('/newsroom/{newsroom:slug}/update', [NewsroomController::class, 'update']);


    Route::get('/job', [JobController::class, 'index']);
    Route::get('/job/checkSlug', [JobController::class, 'checkSlug']);
    Route::post('/job', [JobController::class, 'store']);
    Route::get('/job/create', [JobController::class, 'create']);
    // Route::get('/job/{job:slug}/show', [JobController::class, 'show']);
    Route::get('/job/{job:slug}/edit', [JobController::class, 'edit']);
    Route::put('/job/{job:slug}/update', [JobController::class, 'update']);
    Route::delete('/job/{job:slug}', [JobController::class, 'destroy'])->name('job.destroy');
    Route::get('/jobs/filter', [JobController::class, 'filter'])->name('jobs.filter');
    Route::get('/job/{job}/show', [JobController::class, 'showDataApplicants'])->name('job.applicants');
    // Route::get('/job/applicantshow', [JobController::class, 'DetailApplicant']);
    Route::get('/job/applicantshow/{applicant}', [JobController::class, 'DetailApplicant'])->name('job.applicants');



});
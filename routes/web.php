<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\ReportController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/
//index
Route::get('/', function () {
    return view('auth.login');
});


Route::middleware(['auth'])->group(function () {
    // Route for admin
    Route::middleware('admin')->group(function () {
        Route::get('/admin', [DashboardController::class, 'index'])->name('admin.index');
        Route::get('/assembly-index', [DashboardController::class, 'assembly'])->name('assembly.index');
        Route::get('/marking-index', [DashboardController::class, 'marking'])->name('marking.index');
        Route::get('/packing-index', [DashboardController::class, 'packing'])->name('packing.index');
        //user CRUD
        Route::get('/user-index', [UserController::class, 'index'])->name('user.index');
        Route::get('/user-create', [UserController::class, 'create'])->name('user.create');
        Route::post('/user-store', [UserController::class, 'store'])->name('user.store');
        Route::get('/user-detail/{id}', [UserController::class, 'edit'])->name('user.detail');
        Route::patch('/user-update/{id}', [UserController::class, 'update'])->name('user.update');
        Route::delete('/user-delete/{id}', [UserController::class, 'destroy'])->name('user.delete');
    });

    // Route for user
    Route::middleware(['user'])->group(function () {
        Route::get('/dailyReport', [ReportController::class, 'index'])->name('report.index');
        Route::get('/marking', [ReportController::class, 'marking'])->name('report.marking');
        Route::get('/packing', [ReportController::class, 'packing'])->name('report.packing');
        Route::post('/report', [ReportController::class, 'store'])->name('report.store');
        // Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
        // Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
        // Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    });
});


require __DIR__ . '/auth.php';

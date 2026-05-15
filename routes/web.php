<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ProjectController;
use App\Http\Controllers\ResourceController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;

/*
|--------------------------------------------------------------------------
| Public Routes
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return redirect()->route('login');
});

Route::get('/login', function () {
    return view('auth.login');
})->name('login');

Route::get('/register', function () {
    return view('auth.register');
})->name('register');

/*
|--------------------------------------------------------------------------
| Auth Actions
|--------------------------------------------------------------------------
*/

Route::post('/login', [AuthController::class, 'login'])->name('login.post');
Route::post('/register', [AuthController::class, 'register'])->name('register.post');

/*
|--------------------------------------------------------------------------
| Authenticated Routes (User)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    // dashboard
    Route::get('/dashboard', function () {
        $projects = Auth::user()->projects;
        return view('dashboard', compact('projects'));
    })->name('dashboard');

    // projects
    Route::get('/projects/create', [ProjectController::class, 'create'])->name('projects.create');
    Route::post('/projects', [ProjectController::class, 'store'])->name('projects.store');

    // resources (user submit)
    Route::get('/resources/create', [ResourceController::class, 'create'])->name('resources.create');
    Route::post('/resources', [ResourceController::class, 'store'])->name('resources.store');

    // logout
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

/*
|--------------------------------------------------------------------------
| Admin Routes
|--------------------------------------------------------------------------
*/

Route::middleware(['auth', 'admin'])->group(function () {

    // report
    Route::get('/admin/report', [AdminController::class, 'report'])
        ->name('admin.report');

    // resources management
    Route::get('/admin/resources', [ResourceController::class, 'adminIndex'])
        ->name('admin.resources');

    Route::post('/admin/resources/{id}/approve', [ResourceController::class, 'approve'])
        ->name('admin.resources.approve');

    Route::delete('/admin/resources/{id}/reject', [ResourceController::class, 'reject'])
        ->name('admin.resources.reject');
});
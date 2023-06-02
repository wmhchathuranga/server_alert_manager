<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LogsController;
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

Route::get('/', [DashboardController::class, 'index'])->middleware(['auth:sanctum', config('jetstream.auth_session')])->name('dashboard');
Route::get('/dashboard', [DashboardController::class, 'index'])->middleware(['auth:sanctum', config('jetstream.auth_session')])->name('dashboard1');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {

    // Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::get('/logs', [LogsController::class, 'index'])->name('logs');
    Route::get('/logs/{project_api_key}', [LogsController::class, 'index']);


    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

});


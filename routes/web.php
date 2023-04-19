<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Http\Controllers\AuthenticatedSessionController;
use \App\Http\Controllers\Dashboard\DashboardController;
use \App\Http\Controllers\Dashboard\UserController;
use \App\Http\Controllers\Dashboard\ReportController;
use App\Http\Livewire\Dashboard\Report\Report;

Route::group(['middleware' => ['auth:sanctum', 'verified']], function () {
    Route::get('/', [DashboardController::class,'index'])->name('dashboard');

    Route::resource('users', UserController::class);
    Route::get('reports', Report::class)->name('dashboard.reports');
});

\Laravel\Fortify\Fortify::loginView(function () {
    return view('auth.login');
});

Route::group([
    'middleware' => ['auth:sanctum', 'verified'],
    'prefix' => 'datatable',
    'as' => 'datatable.',
], function () {

    Route::get('users', [UserController::class, 'datatable'])->name('user');
    
});




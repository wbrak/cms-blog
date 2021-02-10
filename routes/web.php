<?php

use App\Http\Controllers\Backoffice\DashboardController;
use Illuminate\Support\Facades\Route;

Route::prefix('/backoffice')->group(function(){
    Route::get('/', [DashboardController::class, 'getDashboard'])->name('Dashboard');
});

Route::get('/', function () {
    return view('welcome');
});

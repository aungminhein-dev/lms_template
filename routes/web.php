<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminDashboardController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:web','locale', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::prefix('admin')->controller(AdminDashboardController::class)->group(function(){
        Route::get('dashboard','dashboard')->name('admin.dashboard');
        
    });
});

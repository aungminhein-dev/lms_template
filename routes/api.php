<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\api\ApiAuthController;

Route::middleware('auth:sanctum')->group(function () {
    Route::get('/user', function (Request $request) {
        return $request->user();
    });
});

Route::controller(ApiAuthController::class)->group(function () {
    Route::post('logout', 'logout')->name('api.logout');
    Route::post('login', 'login')->name('api.login');
    Route::post('register', 'register')->name('api.register');
});

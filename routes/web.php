<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin\AdminController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware(['auth:web', 'locale', config('jetstream.auth_session'), 'verified'])->group(function () {
    Route::prefix('admin')->controller(AdminController::class)->group(function () {
        Route::get('dashboard', 'dashboard')->name('admin.dashboard');
        Route::prefix('user')->group(function () {
            Route::get('/', 'userList')->name('admin.user.index');
            Route::post('store', 'storeUser')->name('admin.user.store');
            Route::get('create', 'createUser')->name('admin.user.create');
            Route::get('edit/{id}', 'editUser')->name('admin.user.edit');
            Route::put('update/{id}', 'updateUser')->name('admin.user.update');
            Route::delete('delete/{id}', 'deleteUser')->name('admin.user.delete');
        });
    });
});

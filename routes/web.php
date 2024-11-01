<?php

use Illuminate\Support\Facades\Route;
use Modules\TempMailer\App\Http\Controllers\ConfigController;
use Modules\TempMailer\App\Http\Controllers\SessionsController;
use Modules\TempMailer\App\Http\Controllers\TempMailerController;
use Modules\TempMailer\App\Http\Controllers\UsersController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::group(['prefix' => 'admin/tempmailer'], function () {

    Route::group(['prefix' => 'users'], function () {
        // Users endpoint
        Route::get('/', [UsersController::class, 'index'])
            ->defaults('meta', ['hidden' => false, 'name' => 'Users List'])
            ->name('admin.tempmailer.users.index');
    });

    Route::group(['prefix' => 'sessions'], function () {
        Route::get('/', [SessionsController::class, 'index'])
            ->defaults('meta', ['hidden' => false, 'name' => 'Sessions List'])
            ->name('admin.tempmailer.sessions.index');
    });

    Route::get('/config', [ConfigController::class, 'index'])->name('admin.tempmailer.config.show');
});

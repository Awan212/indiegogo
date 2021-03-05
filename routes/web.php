<?php

use App\Http\Controllers\Admin\DashboardController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| APP ROUTES
|--------------------------------------------------------------------------
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();
Route::middleware(['auth'])->group(function(){

    // ADMIN
    Route::group([
        'as' => 'admin.',
        'prefix' => 'admin',
        'middleware' => 'admin'
    ], function(){
        // Admin Dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // Users Management System
        Route::get('user-list', [DashboardController::class, 'user_list'])->name('user-list');
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');

    // compaign route
    Route::get('campaign', function(){
        return view('public.pages.compaign.index');
    })->name('compagin');
});



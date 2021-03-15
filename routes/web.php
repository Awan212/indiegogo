<?php

use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\SubCategoryController;
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

        // Main Categories routes
        Route::resource('main-categories', MainCategoryController::class);

        // sub categories routes
        Route::resource('sub-categories', SubCategoryController::class);
    });


    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('user.dashboard');

    // compaign route
    Route::get('campaign', function(){
        return view('public.pages.compaign.index');
    })->name('compagin');
});



Route::get('project', function(){
    return view('project');
});

Route::get('home', function(){
    return view('home');
});

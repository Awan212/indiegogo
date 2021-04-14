<?php

use App\Http\Controllers\Admin\Auth\LoginController;
use Laravel\Socialite\Facades\Socialite;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\CampaignController;
use App\Http\Controllers\CountryBankController;
use App\Http\Controllers\CountryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MainCategoryController;
use App\Http\Controllers\SettingController;
use App\Http\Controllers\SubCategoryController;

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;


Route::get('/', function () {
    return view('welcome');
})->name('welcome');

// admin routes

Route::group([
    'as' => 'admin.',
    'prefix' => 'admin',
], function () {

    // guest routes of admin
    Route::middleware(['guest:admin'])->group(function () {
        Route::get('/', [LoginController::class, 'showForm'])->name('loginForm');
        Route::post('/login', [LoginController::class, 'login'])->name('login');
    });

    // auth routes of admin
    Route::middleware(['auth:admin'])->group(function () {
        // admin logout
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        // Admin Dashboard
        Route::get('dashboard', [DashboardController::class, 'dashboard'])->name('dashboard');

        // Users Management System
        Route::get('user-list', [DashboardController::class, 'user_list'])->name('user-list');

        // Main Categories routes
        Route::resource('main-categories', MainCategoryController::class);

        // sub categories routes
        Route::resource('sub-categories', SubCategoryController::class);

        // countirs list
        Route::resource('countries', CountryController::class);

        // country banks list
        Route::resource('country-banks', CountryBankController::class);
    });
});



// users routes

Route::middleware(['guest:web'])->group(function () {
    Auth::routes();
});

Route::get('/auth/redirect/{driver}', function (Request $request) {
    return Socialite::driver($request->driver)->redirect();
});

Route::get('/callback/{driver}', [App\Http\Controllers\Auth\RegisterController::class, 'socail_login']);


Route::middleware(['auth:web'])->group(function () {
    // user logout
    Route::get('logout', [HomeController::class, 'logout']);

    // user Home
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

    // user setting
    Route::get('/settings', [SettingController::class, 'index'])->name('setting');
    Route::get('/edit-settings', [SettingController::class, 'setting'])->name('edit-setting');
    Route::post('/edit-settings', [SettingController::class, 'editSetting']);
    Route::post('/edit-profile', [SettingController::class, 'editProfile']);

    Route::get('deactivate_aacount', [SettingController::class, 'deactivate']);


    //start a compaing
    Route::get('create-campagin', [CampaignController::class, 'create_campaign']);
    Route::post('create-campagin', [CampaignController::class, 'store_campaign']);
    Route::resource('campaign', CampaignController::class);

    // compaign route
    // Route::get('campaign', function () {
    // return view('public.pages.compaign.index');
    // })->name('compagin');
});



Route::get('project', function () {
    return view('project');
});

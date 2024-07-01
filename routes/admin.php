<?php

use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\OrderController;
use App\Http\Controllers\Admin\RoleController;
use App\Http\Controllers\Admin\ThemeController;
use Illuminate\Support\Facades\Route;


Route::group([ 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('main');
    Route::resources([

       // 'admins' => AdminController::class,
       // 'roles' => RoleController::class,
      //  'contacts' => CategoryController::class,
        'contacts' => ContactController::class,



    ]);




});

<?php


use App\Http\Controllers\Admin\AboutController;
use App\Http\Controllers\Admin\AdminController;
use App\Http\Controllers\Admin\ContactController;
use App\Http\Controllers\Admin\DashboardController;

use App\Http\Controllers\Admin\ExpertController;
use App\Http\Controllers\Admin\ServiceController;
use App\Http\Controllers\Admin\SliderController;
use Illuminate\Support\Facades\Route;


Route::group(['middleware' => ['auth'], 'as' => 'admin.'], function () {

    Route::get('/', [DashboardController::class, 'index'])->name('main');
    Route::resources([
        'admins' => AdminController::class,
        'abouts' => AboutController::class,
        'services' => ServiceController::class,
        'sliders' => SliderController::class,
        'experts' => ExpertController::class,
        'contacts' => ContactController::class,
    ]);

});

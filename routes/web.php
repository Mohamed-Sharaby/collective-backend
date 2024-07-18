<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    $about = \App\Models\About::first();
    $service = \App\Models\Service::first();
    $sliders = \App\Models\Slider::all();
    $experts = \App\Models\Expert::all();
    return view('site.index', compact('about', 'service', 'sliders','experts'));
})->name('site.index');

Route::get('/contact', function () {
    return view('site.contact');
})->name('site.contact');

Route::post('/save', [\App\Http\Controllers\Site\SiteController::class, 'save'])->name('site-old.save');


require __DIR__ . '/auth.php';

<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;

Route::get('/', function () {
    return view('frontend.index');
});


Route::controller(App\Http\Controllers\Frontend\FrontendController::class)->group(function () {
    // Route::get('/', 'index');
    // Route::get('/collections', 'categories');
    // Route::get('/collections/{category_slug}', 'products');
    // Route::get('/collections/{category_slug}/{product_slug}', 'productView');

    // Route::get('/new-arrivals', 'newArrival');
    // Route::get('/featured-products', 'featuredProducts');

    Route::get('/about-us', 'aboutpage');
    Route::get('/contact-us', 'contactpage');

    // Route::get('search','searchProducts');
});

Route::get('dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);




Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

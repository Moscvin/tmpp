<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ServiceController;
use App\Http\Middleware\LocaleMiddleware;
use Illuminate\Support\Facades\Route;

Route::group(['prefix' => LocaleMiddleware::getLocale()], function () {
    Route::get('/', [PageController::class, 'index'])->name('home');
    Route::get('/about', [PageController::class, 'about'])->name('about');

    Route::get('/services', [ServiceController::class, 'index'])->name('services');
    Route::get('/service/{service:slug}', [ServiceController::class, 'show'])->name('service');

    Route::get('/blog', [BlogController::class, 'index'])->name('blog');
    Route::get('/blog/{blog:slug}', [BlogController::class, 'show'])->name('blog.show');

    Route::get('/contact', [ContactController::class, 'index'])->name('contact');
    Route::post('/contact', [ContactController::class, 'store'])->name('contact.store');
});

Route::get('/set-locale/{lang}', [PageController::class, 'setLocale'])->name('set-locale');

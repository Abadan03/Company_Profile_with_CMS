<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Landing Page Route (Front End)
// Home
Route::get('/', [HomeController::class, 'index'])->name('home');

// About
Route::get('/about', [AboutController::class, 'index'])->name('about');

// Services
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/service/{service}', [ServiceController::class, 'show'])->name('service.show');

// Organization
Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');

// Article
Route::get('/article', [ArticleController::class, 'index'])->name('article');

// Gallery
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Multi language Route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');


<?php

use App\Http\Controllers\AboutController;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrganizationController;
use App\Http\Controllers\ServiceController;
use Illuminate\Support\Facades\Route;

// Landing Page Route (Front End)
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/service', [ServiceController::class, 'index'])->name('service');
Route::get('/about', [AboutController::class, 'index'])->name('about');
Route::get('/organization', [OrganizationController::class, 'index'])->name('organization');
Route::get('/article', [ArticleController::class, 'index'])->name('article');
Route::get('/gallery', [GalleryController::class, 'index'])->name('gallery');

// Multi language Route
Route::get('lang/{locale}', function ($locale) {
    if (in_array($locale, ['en', 'id'])) {
        session(['locale' => $locale]);
    }
    return redirect()->back();
})->name('lang.switch');


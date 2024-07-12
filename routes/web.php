<?php

use Illuminate\Support\Facades\Route;

Route::get('/', [App\Http\Controllers\DataBeritaController::class, 'index'])->name('home.index');

Route::get('/logout', [App\Http\Controllers\AuthController::class, 'logout'])->name('admin.logout');

Route::get('admin', [App\Http\Controllers\AuthController::class, 'showLoginForm'])->name('admin.showLoginForm');

Route::post('admin', [App\Http\Controllers\AuthController::class, 'login'])->name('admin.login');

Route::group(['middleware' => 'web'], function () {
    Route::get('/admin/dashboard', [App\Http\Controllers\AuthController::class, 'dashboard'])->name('admin.dashboard');
    // Data Admin
    Route::prefix('/admin/data-admin')->group(function () {
        Route::get('/', [App\Http\Controllers\DataAdminController::class, 
        'dataAdmin'])->name('data-admin.dataAdmin');
        Route::get('/create', [App\Http\Controllers\DataAdminController::class, 'create'])->name('data-admin.create');
        Route::post('/', [App\Http\Controllers\DataAdminController::class, 'store'])->name('data-admin.store');
        // Route::get('/{id}', [DataAdminControllers::class, 'show'])->name('data-admin.show');
        Route::get('/{id}/edit', [App\Http\Controllers\DataAdminController::class, 'edit'])->name('data-admin.edit');
        Route::put('/{id}', [App\Http\Controllers\DataAdminController::class, 'update'])->name('data-admin.update');
        Route::delete('/{id}', [App\Http\Controllers\DataAdminController::class, 'destroy'])->name('data-admin.destroy');
    });
    
    // Data Berita 
    Route::prefix('admin/data-berita')->group(function () {
        Route::get('/', [App\Http\Controllers\DataBeritaController::class,
        'dataBerita'])->name('data-berita.dataBerita');
        Route::get('/create', [App\Http\Controllers\DataBeritaController::class, 'create'])->name('data-berita.create');
        Route::post('/', [App\Http\Controllers\DataBeritaController::class, 'store'])->name('data-berita.store');
        // Route::get('/{id}', [DataBeritaControllers::class, 'show'])->name('data-berita.show');
        Route::get('/{id}/edit', [App\Http\Controllers\DataBeritaController::class, 'edit'])->name('data-berita.edit');
        Route::put('/{id}', [App\Http\Controllers\DataBeritaController::class, 'update'])->name('data-berita.update');
        Route::delete('/{id}', [App\Http\Controllers\DataBeritaController::class, 'destroy'])->name('data-berita.destroy');
    });

    // Data Kategori 
    Route::prefix('admin/data-kategori')->group(function () {
        Route::get('/', [App\Http\Controllers\KategoriController::class,
        'kategori'])->name('data-kategori.kategori');
        Route::get('/create', [App\Http\Controllers\KategoriController::class, 'create'])->name('data-kategori.create');
        Route::post('/', [App\Http\Controllers\KategoriController::class, 'store'])->name('data-kategori.store');
        // Route::get('/{id}', [KategoriControllers::class, 'show'])->name('data-kategori.show');
        Route::get('/{id}/edit', [App\Http\Controllers\KategoriController::class, 'edit'])->name('data-kategori.edit');
        Route::put('/{id}', [App\Http\Controllers\KategoriController::class, 'update'])->name('data-kategori.update');
        Route::delete('/{id}', [App\Http\Controllers\KategoriController::class, 'destroy'])->name('data-kategori.destroy');
    });

});

<?php

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

Route::get("/", function () {
    return redirect()->route('admin.index');
});

Route::prefix("admin")->group(function () {
    Route::get("", \App\Livewire\Admin\Index::class)->name('admin.index');
    Route::prefix("products")->group(function () {
        Route::get("", \App\Livewire\Admin\Products\Index::class)->name('admin.products.index');
        Route::get("create", \App\Livewire\Admin\Products\Create::class)->name('admin.products.create');
    });
    Route::prefix("skus")->group(function () {
        Route::get("", \App\Livewire\Admin\SKU\Index::class)->name('admin.skus.index');
        Route::get("create", \App\Livewire\Admin\SKU\Create::class)->name('admin.skus.create');
    });
});

<?php


use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\ShipingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/locale/{locale}', [LocalizationController::class, 'setLang'])->name('setLang');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::prefix('admin')->middleware(['auth', 'isAdmin'])->group(function () {
    Route::get('/dashboard', [App\Http\Controllers\Admin\DashboardController::class, 'index']);


    Route::get('/banners', [BannerController::class, 'index'])->name('banners.index');
    Route::get('/banners/create', [BannerController::class, 'create'])->name('banners.create');
    Route::post('/banners', [BannerController::class, 'store'])->name('banners.store');
    Route::get('/banners/{banner}/edit', [BannerController::class, 'edit'])->name('banners.edit');
    Route::put('/banners/{banner}', [BannerController::class, 'update'])->name('banners.update');
    Route::delete('/banners/{banner}', [BannerController::class, 'destroy'])->name('banners.destroy');



   Route::get('/shipings', [ShipingController::class, 'index'])->name('shipings.index');
Route::get('/shipings/create', [ShipingController::class, 'create'])->name('shipings.create');
Route::post('/shipings', [ShipingController::class, 'store'])->name('shipings.store');
Route::get('/shipings/{shiping}/edit', [ShipingController::class, 'edit'])->name('shipings.edit');
Route::put('/shipings/{shiping}', [ShipingController::class, 'update'])->name('shipings.update');
Route::delete('/shipings/{shiping}', [ShipingController::class, 'destroy'])->name('shipings.destroy');

});

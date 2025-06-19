<?php


use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BathController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipingController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/locale/{locale}', [LocalizationController::class, 'setLang'])->name('setLang');
Route::get('/product/{id}', [FrontendController::class, 'showProduct'])->name('product.show');
Route::get('/showblog/{id}', [FrontendController::class, 'showblog'])->name('blog.show');






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


    Route::get('/offers', [OfferController::class, 'index'])->name('offers.index');
    Route::get('/offers/create', [OfferController::class, 'create'])->name('offers.create');
    Route::post('/offers', [OfferController::class, 'store'])->name('offers.store');
    Route::get('/offers/{shiping}/edit', [OfferController::class, 'edit'])->name('offers.edit');
    Route::put('/offers/{shiping}', [OfferController::class, 'update'])->name('offers.update');
    Route::delete('/offers/{shiping}', [OfferController::class, 'destroy'])->name('offers.destroy');


    Route::get('/products', [ProductController::class, 'index'])->name('products.index');
    Route::get('/products/create', [ProductController::class, 'create'])->name('products.create');
    Route::post('/products', [ProductController::class, 'store'])->name('products.store');
    Route::get('/products/{shiping}/edit', [ProductController::class, 'edit'])->name('products.edit');
    Route::put('/products/{shiping}', [ProductController::class, 'update'])->name('products.update');
    Route::delete('/products/{shiping}', [ProductController::class, 'destroy'])->name('products.destroy');


    Route::get('/blog',[BlogController::class,'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{shiping}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{shiping}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{shiping}', [BlogController::class, 'destroy'])->name('blog.destroy');


    Route::get('/bath',[BathController::class,'index'])->name('bath.index');
    Route::get('/bath/create', [BathController::class, 'create'])->name('bath.create');
    Route::post('/bath', [BathController::class, 'store'])->name('bath.store');
    Route::get('/bath/{shiping}/edit', [BathController::class, 'edit'])->name('bath.edit');
    Route::put('/bath/{shiping}', [BathController::class, 'update'])->name('bath.update');
    Route::delete('/bath/{shiping}', [BathController::class, 'destroy'])->name('bath.destroy');

});

<?php


use App\Http\Controllers\LocalizationController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BannerController;
use App\Http\Controllers\BathController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\Frontend\FrontendController;
use App\Http\Controllers\LockersController;
use App\Http\Controllers\OfferController;
use App\Http\Controllers\PencilController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\ShipingController;
use App\Http\Controllers\SkinsController;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/', [\App\Http\Controllers\Frontend\FrontendController::class, 'index']);
Route::get('/locale/{locale}', [LocalizationController::class, 'setLang'])->name('setLang');
Route::get('/product/{id}', [FrontendController::class, 'showProduct'])->name('product.show');
Route::get('/showblog/{id}', [FrontendController::class, 'showblog'])->name('blog.show');
Route::get('/bath', function () {
    return view('frontend.bath');
})->name('bath');
Route::get('/pencil', function () {
    return view('frontend.pencil');
})->name('pencil');
Route::get('/locker', function () {
    return view('frontend.locker');
})->name('locker');
Route::get('/skins', function () {
    return view('frontend.skins');
})->name('skins');
Route::get('/pencil', [FrontendController::class, 'showPencil'])->name('pencil');
Route::get('/locker', [FrontendController::class, 'showLokers'])->name('locker');
Route::get('/skins', [FrontendController::class, 'showSkins'])->name('skins');

Route::get('/bath', [FrontendController::class, 'showBath'])->name('bath');
Route::get('/bath/{id}', [FrontendController::class, 'showBathSingle'])->name('bath.single');
Route::get('/pencil/{id}', [FrontendController::class, 'showPencilSingle'])->name('pencil.single');
Route::get('/locker/{id}', [FrontendController::class, 'showlockerSingle'])->name('locker.single');
Route::get('/skins/{id}', [FrontendController::class, 'showSkinsSingle'])->name('skins.single');


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


    Route::get('/blog', [BlogController::class, 'index'])->name('blog.index');
    Route::get('/blog/create', [BlogController::class, 'create'])->name('blog.create');
    Route::post('/blog', [BlogController::class, 'store'])->name('blog.store');
    Route::get('/blog/{shiping}/edit', [BlogController::class, 'edit'])->name('blog.edit');
    Route::put('/blog/{shiping}', [BlogController::class, 'update'])->name('blog.update');
    Route::delete('/blog/{shiping}', [BlogController::class, 'destroy'])->name('blog.destroy');


    Route::get('/bath', [BathController::class, 'index'])->name('bath.index');
    Route::get('/bath/create', [BathController::class, 'create'])->name('bath.create');
    Route::post('/bath', [BathController::class, 'store'])->name('bath.store');
    Route::get('/bath/{shiping}/edit', [BathController::class, 'edit'])->name('bath.edit');
    Route::put('/bath/{shiping}', [BathController::class, 'update'])->name('bath.update');
    Route::delete('/bath/{shiping}', [BathController::class, 'destroy'])->name('bath.destroy');

    Route::get('/pencil', [PencilController::class, 'index'])->name('pencil.index');
    Route::get('/pencil/create', [PencilController::class, 'create'])->name('pencil.create');
    Route::post('/pencil', [PencilController::class, 'store'])->name('pencil.store');
    Route::get('/pencil/{shiping}/edit', [PencilController::class, 'edit'])->name('pencil.edit');
    Route::put('/pencil/{shiping}', [PencilController::class, 'update'])->name('pencil.update');
    Route::delete('/pencil/{shiping}', [PencilController::class, 'destroy'])->name('pencil.destroy');


    Route::get('/locker', [LockersController::class, 'index'])->name('locker.index');
    Route::get('/locker/create', [LockersController::class, 'create'])->name('locker.create');
    Route::post('/locker', [LockersController::class, 'store'])->name('locker.store');
    Route::get('/locker/{shiping}/edit', [LockersController::class, 'edit'])->name('locker.edit');
    Route::put('/locker/{shiping}', [LockersController::class, 'update'])->name('locker.update');
    Route::delete('/locker/{shiping}', [LockersController::class, 'destroy'])->name('locker.destroy');



     Route::get('/skins', [SkinsController::class, 'index'])->name('skins.index');
    Route::get('/skins/create', [SkinsController::class, 'create'])->name('skins.create');
    Route::post('/skins', [SkinsController::class, 'store'])->name('skins.store');
    Route::get('/skins/{shiping}/edit', [SkinsController::class, 'edit'])->name('skins.edit');
    Route::put('/skins/{shiping}', [SkinsController::class, 'update'])->name('skins.update');
    Route::delete('/skins/{shiping}', [SkinsController::class, 'destroy'])->name('skins.destroy');
});

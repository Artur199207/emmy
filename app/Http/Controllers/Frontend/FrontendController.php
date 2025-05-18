<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\Offer;
use App\Models\Product;
use App\Models\Shiping;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index()
    {
        $banners = BannerModel::all();
        $shipings = Shiping::all();
        $offers = Offer::all();
        $products = Product::all();
        return view('frontend.index', compact('banners', 'shipings', 'offers', 'products'));
    }
    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
         $products = Product::all();
        return view('frontend.product.show', compact('product','products'));
    }
}

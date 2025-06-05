<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\Blog;
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
        $blog = Blog::all();
        return view('frontend.index', compact('banners', 'shipings', 'offers', 'products', 'blog'));
    }
    public function showProduct($id)
    {
        $product = Product::findOrFail($id);
        $products = Product::all();
        return view('frontend.product.show', compact('product', 'products'));
    }
     public function showblog($id)
    {
        $blog = Blog::findOrFail($id);
        return view('frontend.blog.show', compact('blog'));
    }
}

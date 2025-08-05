<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\Bath;
use App\Models\Blog;
use App\Models\Lockers;
use App\Models\Mirror;
use App\Models\Offer;
use App\Models\Pencil;
use App\Models\Pic;
use App\Models\Product;
use App\Models\Shiping;
use App\Models\Skins;
use App\Models\Team;
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
        $pic = Pic::all();
        return view('frontend.index', compact('banners', 'shipings', 'offers', 'products', 'blog','pic'));
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
    public function showBath()
    {
        $baths = Bath::all();
        return view('frontend.bath', compact('baths'));
    }
    public function showBathSingle($id)
    {
        $bath = Bath::findOrFail($id);
        return view('frontend.bath-single', compact('bath'));
    }
    public function showPencil()
    {
        $pencils = Pencil::all();
        return view('frontend.pencil', compact('pencils'));
    }
    public function showPencilSingle($id)
    {
        $pencil = Pencil::findOrFail($id);
        return view('frontend.pencil-single', compact('pencil'));
    }
    public function showLokers()
    {
        $lockers = Lockers::all();
        return view('frontend.locker', compact('lockers'));
    }
    public function showlockerSingle($id)
    {
        $locker = Lockers::findOrFail($id);
        return view('frontend.locker-single', compact('locker'));
    }
    public function showSkins()
    {
        $skins = Skins::all();
        return view('frontend.skins', compact('skins'));
    }
    public function showSkinsSingle($id)
    {
        $skins = Skins::findOrFail($id);
        return view('frontend.skins-single', compact('skins'));
    }
    public function showMirror()
    {
        $mirror = Mirror::all();
        return view('frontend.mirror', compact('mirror'));
    }
    public function showMirrorSingle($id)
    {
        $mirror = Mirror::findOrFail($id);
        return view('frontend.mirror-single', compact('mirror'));
    }
    public function showabouteUs()
    {
        $offers = Offer::all();
        return view('frontend.abouteUs', compact('offers'));
    }
    public function showaTeam()
    {
        $team = Team::all();
        return view('frontend.ourTeam', compact('team'));
    }
   public function showShipings()
{
    $shipings = Shiping::all();
    return view('frontend.price', compact('shipings'));
}
   public function showStati()
{
    $blog = Blog::all();
    return view('frontend.stati', compact('blog'));
}
}

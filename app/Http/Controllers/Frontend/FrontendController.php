<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;
use App\Models\Shiping;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
    $banners = BannerModel::all();  
    $shipings = Shiping::all(); 
    return view('frontend.index', compact('banners', 'shipings'));  
}
}

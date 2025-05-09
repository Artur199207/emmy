<?php
namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\BannerModel;  
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function index(){
        $banners = BannerModel::all();  
        return view('frontend.index', compact('banners'));  
    }
}

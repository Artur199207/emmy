<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Skins;
use App\Models\Lockers;
use App\Models\Pencil;
use App\Models\Bath;
use App\Models\Mirror;

class SearchController extends Controller
{
    public function index(Request $request)
    {
        $query = $request->input('s');

        $skins = Skins::where('titleRu', 'like', '%' . $query . '%')->get();
        $lockers = Lockers::where('titleRu', 'like', '%' . $query . '%')->get();
        $pencils = Pencil::where('titleRu', 'like', '%' . $query . '%')->get();
        $baths = Bath::where('titleRu', 'like', '%' . $query . '%')->get();
        $mirrors = Mirror::where('titleRu', 'like', '%' . $query . '%')->get();

        return view('search.results', compact('query', 'skins', 'lockers', 'pencils', 'baths', 'mirrors'));
    }
}

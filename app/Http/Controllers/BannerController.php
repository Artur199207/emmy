<?php

namespace App\Http\Controllers;

use App\Http\Requests\BannerRequest;
use App\Models\Banner;
use App\Models\BannerModel;
use Illuminate\Http\Request;

class BannerController extends Controller
{
    
    public function index()
    {
        $banners = BannerModel::all();
        return view('banners.index', compact('banners'));
    }


    public function create()
    {
        return view('banners.create');
    }

 
    public function store(BannerRequest $request)
    {
        $request->validate([
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

       
        $imagePath = $request->file('image')->store('banners', 'public');

        BannerModel::create([
            'titleRu' => $request->titleRu,
            'titleEn' => $request->titleEn,
            'descriptionRu' => $request->descriptionRu,
            'descriptionEn' => $request->descriptionEn,
            'image' => $imagePath,
        ]);

        return redirect()->route('banners.index')->with('success', 'Բանները հաջողությամբ ավելացվեցին։');
    }

   
    public function show($id)
    {
        $banner = BannerModel::findOrFail($id);
        return view('banners.show', compact('banner'));
    }


    public function edit($id)
    {
        $banner = BannerModel::findOrFail($id);
        return view('banners.edit', compact('banner'));
    }

    public function update(BannerRequest $request, $id)
    {
        $banner = BannerModel::findOrFail($id);

        $request->validate([
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $data = $request->only(['titleRu', 'titleEn', 'descriptionRu', 'descriptionEn']);

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('banners', 'public');
        }

        $banner->update($data);

        return redirect()->route('banners.index')->with('success', 'Բանները հաջողությամբ թարմացվեցին։');
    }

 
    public function destroy($id)
    {
        $banner = BannerModel::findOrFail($id);
        $banner->delete();

        return redirect()->route('banners.index')->with('success', 'Բանները հաջողությամբ ջնջվեցին։');
    }
}

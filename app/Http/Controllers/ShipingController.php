<?php

namespace App\Http\Controllers;

use App\Http\Requests\ShipingRequest;
use App\Models\Shiping;
use Illuminate\Http\Request;

class ShipingController extends Controller
{
    public function index()
    {
        $shipings = Shiping::all();
        return view('shipings.index', compact('shipings'));
    }
    public function create()
    {
        return view('shipings.create');
    }
    public function store(ShipingRequest $request)
    {
        $request->validate([
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:350000',
        ]);


        $imagePath = $request->file('image')->store('shipings', 'public');

        Shiping::create([
            'titleRu' => $request->titleRu,
            'titleEn' => $request->titleEn,
            'descriptionRu' => $request->descriptionRu,
            'descriptionEn' => $request->descriptionEn,
            'image' => $imagePath,
        ]);

        return redirect()->route('shipings.index')->with('success', 'Բանները հաջողությամբ ավելացվեցին։');
    }
    public function show($id)
    {
        $shipings = Shiping::findOrFail($id);
        return view('shipings.show', compact('shiping'));
    }
    public function edit($id)
    {
        $shipings = Shiping::findOrFail($id);
        return view('shipings.edit', compact('shipings'));
    }

    public function update(Request $request, $id)
{
    $shiping = Shiping::findOrFail($id);

    $request->validate([
        'titleRu' => 'required|string|max:255',
        'titleEn' => 'required|string|max:255',
        'descriptionRu' => 'required|string',
        'descriptionEn' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only(['titleRu', 'titleEn', 'descriptionRu', 'descriptionEn']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('shipings', 'public');
    }

    $shiping->update($data);

    return redirect()->route('shipings.index')->with('success', 'Բանները հաջողությամբ թարմացվեցին։');
}


    public function destroy($id)
    {
        $shipings = Shiping::findOrFail($id);
        $shipings->delete();

        return redirect()->route('shipings.index')->with('success', 'Բանները հաջողությամբ ջնջվեցին։');
    }
}

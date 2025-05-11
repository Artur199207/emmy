<?php

namespace App\Http\Controllers;

use App\Http\Requests\OfferRequest;
use App\Models\Offer;
use Illuminate\Http\Request;

class OfferController extends Controller
{
   public function index()
    {
        $offers = Offer::all();
        return view('offers.index', compact('offers'));
    }
     public function create()
    {
        return view('offers.create');
    }


     public function store(OfferRequest $request)
    {
        $request->validate([
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:350000',
        ]);


        $imagePath = $request->file('image')->store('Offers', 'public');

        Offer::create([
            'descriptionRu' => $request->descriptionRu,
            'descriptionEn' => $request->descriptionEn,
            'image' => $imagePath,
        ]);

        return redirect()->route('offers.index')->with('success', 'Элементы были успешно добавлены.');
    }
    public function show($id)
    {
        $offers = Offer::findOrFail($id);
        return view('offers.show', compact('offers'));
    }
    public function edit($id)
    {
        $offers = Offer::findOrFail($id);
        return view('offers.edit', compact('offers'));
    }

    public function update(OfferRequest $request, $id)
{
    $offers = Offer::findOrFail($id);

    $request->validate([
        'descriptionRu' => 'required|string',
        'descriptionEn' => 'required|string',
        'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
    ]);

    $data = $request->only([ 'descriptionRu', 'descriptionEn']);

    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('shipings', 'public');
    }

    $offers->update($data);

    return redirect()->route('offers.index')->with('success', 'Элементы были успешно обновлены.');
}


    public function destroy($id)
    {
        $offers = Offer::findOrFail($id);
        $offers->delete();

        return redirect()->route('offers.index')->with('success', 'Элементы были успешно удалены.');
    }
}

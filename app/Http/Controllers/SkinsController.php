<?php

namespace App\Http\Controllers;

use App\Http\Requests\SkinsRequest;
use App\Models\Skins;
use Illuminate\Http\Request;

class SkinsController extends Controller
{
    
    public function index()
    {
        $skins = Skins::all();
        return view('skins.index', compact('skins'));
    }
     public function create()
    {
        return view('skins.create');
    }
    public function store(SkinsRequest $request)
    {
        $data = $request->validated();

        // Պահպանում ենք image ֆայլը, եթե կա
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('skins_images', 'public');
        }

        // Պահպանում ենք images (gallery), եթե կա
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('skins_images', 'public');
            }
            $data['images'] = json_encode($images);
        }

        // Մտնում է JSON, եթե զանգված է
        if (isset($data['color']) && is_array($data['color'])) {
            $data['color'] = json_encode($data['color']);
        }

        if (isset($data['sizeRu']) && is_array($data['sizeRu'])) {
            $data['sizeRu'] = json_encode($data['sizeRu']);
        }

        // boolean դաշտեր, եթե անհրաժեշտ է, օրինակ՝ Shape1, Shape2
        $data['shape1'] = $request->has('shape1');
        $data['shape2'] = $request->has('shape2');


        Skins::create($data);

        return redirect()->route('skins.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
    }
    public function edit($id)
{
    $skins = Skins::findOrFail($id);
    return view('skins.edit', compact('skins'));
}
public function update(SkinsRequest $request, $id)
{
    $skins = Skins::findOrFail($id);

    $request->validate([
        'titleRu' => 'required|string',
        'titleEn' => 'required|string',
        'priceRu' => 'required',
        'articleRu' => 'required|string',
        'articleEn' => 'required|string',
        'annotationRu' => 'required|string',
        'annotationEn' => 'required|string',
        'descriptionRu' => 'required|string',
        'descriptionEn' => 'required|string',
        'informationRu' => 'required|string',
        'informationEn' => 'required|string',
        'payRu' => 'required|string',
        'payEn' => 'required|string',
        'DeliveryRu' => 'required|string',
        'DeliveryEn' => 'required|string',
    ]);

    // Update fields
    $skins->available = $request->available;
    $skins->titleRu = $request->titleRu;
    $skins->titleEn = $request->titleEn;
    $skins->priceRu = $request->priceRu;
    $skins->articleRu = $request->articleRu;
    $skins->articleEn = $request->articleEn;
    $skins->annotationRu = $request->annotationRu;
    $skins->annotationEn = $request->annotationEn;
    $skins->descriptionRu = $request->descriptionRu;
    $skins->descriptionEn = $request->descriptionEn;
    $skins->informationRu = $request->informationRu;
    $skins->informationEn = $request->informationEn;
    $skins->payRu = $request->payRu;
    $skins->payEn = $request->payEn;
    $skins->DeliveryRu = $request->DeliveryRu;
    $skins->DeliveryEn = $request->DeliveryEn;
    $skins->shape1 = $request->has('shape1');
    $skins->shape2 = $request->has('shape2');
    $skins->color = $request->color ?? [];
    $skins->sizeRu = $request->sizeRu ?? [];

    // Image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/lockers/', $filename);
        $skins->image = $filename;
    }

    $skins->save();

    return redirect()->route('skins.index')->with('status', 'Элемент успешно обновлен!');
}
public function destroy($id)
{
    $skins = Skins::findOrFail($id);

    // եթե ունեք upload արված պատկեր, կարող եք նաև ջնջել ֆիզիկապես
    if ($skins->image && file_exists(public_path('uploads/skins/' . $skins->image))) {
        unlink(public_path('uploads/skins/' . $skins->image));
    }

    $skins->delete();

    return redirect()->route('skins.index')->with('status', 'Элемент успешно удален!');
}


}


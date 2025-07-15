<?php

namespace App\Http\Controllers;

use App\Http\Requests\MirrorRequest;
use App\Models\Mirror;
use Illuminate\Http\Request;

class MirrorController extends Controller
{

    public function index()
    {
        $mirror = Mirror::all();
        return view('mirror.index', compact('mirror'));
    }
    public function create()
    {
        return view('mirror.create');
    }
    public function store(MirrorRequest $request)
    {
        $data = $request->validated();

        // Պահպանում ենք image ֆայլը, եթե կա
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('mirror_images', 'public');
        }

        // Պահպանում ենք images (gallery), եթե կա
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('mirror_images', 'public');
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


        Mirror::create($data);

        return redirect()->route('mirror.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
    }
    public function edit($id)
    {
        $mirror = Mirror::findOrFail($id);
        return view('mirror.edit', compact('mirror'));
    }
    public function update(MirrorRequest $request, $id)
    {
        $mirror = Mirror::findOrFail($id);

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
        $mirror->available = $request->available;
        $mirror->titleRu = $request->titleRu;
        $mirror->titleEn = $request->titleEn;
        $mirror->priceRu = $request->priceRu;
        $mirror->articleRu = $request->articleRu;
        $mirror->articleEn = $request->articleEn;
        $mirror->annotationRu = $request->annotationRu;
        $mirror->annotationEn = $request->annotationEn;
        $mirror->descriptionRu = $request->descriptionRu;
        $mirror->descriptionEn = $request->descriptionEn;
        $mirror->informationRu = $request->informationRu;
        $mirror->informationEn = $request->informationEn;
        $mirror->payRu = $request->payRu;
        $mirror->payEn = $request->payEn;
        $mirror->DeliveryRu = $request->DeliveryRu;
        $mirror->DeliveryEn = $request->DeliveryEn;
        $mirror->shape1 = $request->has('shape1');
        $mirror->shape2 = $request->has('shape2');
        $mirror->color = $request->color ?? [];
        $mirror->sizeRu = $request->sizeRu ?? [];

        // Image upload
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . '.' . $file->getClientOriginalExtension();
            $file->move('uploads/lockers/', $filename);
            $mirror->image = $filename;
        }

        $mirror->save();

        return redirect()->route('mirror.index')->with('status', 'Элемент успешно обновлен!');
    }
    public function destroy($id)
    {
        $mirror = Mirror::findOrFail($id);

        // եթե ունեք upload արված պատկեր, կարող եք նաև ջնջել ֆիզիկապես
        if ($mirror->image && file_exists(public_path('uploads/mirror/' . $mirror->image))) {
            unlink(public_path('uploads/mirror/' . $mirror->image));
        }

        $mirror->delete();

        return redirect()->route('mirror.index')->with('status', 'Элемент успешно удален!');
    }
}

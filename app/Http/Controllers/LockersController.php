<?php

namespace App\Http\Controllers;

use App\Http\Requests\LockerRequest;
use App\Models\Lockers;
use Illuminate\Http\Request;

class LockersController extends Controller
{
    
    public function index()
    {
        $lockers = Lockers::all();
        return view('locker.index', compact('lockers'));
    }
     public function create()
    {
        return view('locker.create');
    }
    public function store(LockerRequest $request)
    {
        $data = $request->validated();

        // Պահպանում ենք image ֆայլը, եթե կա
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('locker_images', 'public');
        }

        // Պահպանում ենք images (gallery), եթե կա
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('locker_images', 'public');
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


        Lockers::create($data);

        return redirect()->route('locker.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
    }
    public function edit($id)
{
    $locker = Lockers::findOrFail($id);
    return view('locker.edit', compact('locker'));
}
public function update(LockerRequest $request, $id)
{
    $locker = Lockers::findOrFail($id);

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
    $locker->available = $request->available;
    $locker->titleRu = $request->titleRu;
    $locker->titleEn = $request->titleEn;
    $locker->priceRu = $request->priceRu;
    $locker->articleRu = $request->articleRu;
    $locker->articleEn = $request->articleEn;
    $locker->annotationRu = $request->annotationRu;
    $locker->annotationEn = $request->annotationEn;
    $locker->descriptionRu = $request->descriptionRu;
    $locker->descriptionEn = $request->descriptionEn;
    $locker->informationRu = $request->informationRu;
    $locker->informationEn = $request->informationEn;
    $locker->payRu = $request->payRu;
    $locker->payEn = $request->payEn;
    $locker->DeliveryRu = $request->DeliveryRu;
    $locker->DeliveryEn = $request->DeliveryEn;
    $locker->shape1 = $request->has('shape1');
    $locker->shape2 = $request->has('shape2');
    $locker->color = $request->color ?? [];
    $locker->sizeRu = $request->sizeRu ?? [];

    // Image upload
    if ($request->hasFile('image')) {
        $file = $request->file('image');
        $filename = time() . '.' . $file->getClientOriginalExtension();
        $file->move('uploads/lockers/', $filename);
        $locker->image = $filename;
    }

    $locker->save();

    return redirect()->route('locker.index')->with('status', 'Элемент успешно обновлен!');
}
public function destroy($id)
{
    $locker = Lockers::findOrFail($id);

    // եթե ունեք upload արված պատկեր, կարող եք նաև ջնջել ֆիզիկապես
    if ($locker->image && file_exists(public_path('uploads/lockers/' . $locker->image))) {
        unlink(public_path('uploads/lockers/' . $locker->image));
    }

    $locker->delete();

    return redirect()->route('locker.index')->with('status', 'Элемент успешно удален!');
}


}

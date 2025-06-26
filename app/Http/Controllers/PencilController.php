<?php

namespace App\Http\Controllers;

use App\Http\Requests\PencilRequest;
use App\Models\Pencil;
use Illuminate\Http\Request;

class PencilController extends Controller
{
    // Ցուցադրում է բոլոր պենալները
    public function index()
    {
        $pencils = Pencil::all();
        return view('pencil.index', compact('pencils'));
    }

    // Ստացող էջ, նոր պենալի ստեղծման համար
    public function create()
    {
        return view('pencil.create');
    }

    // Պահպանում է նոր պենալ
    public function store(PencilRequest $request)
    {
        $data = $request->validated();

        // Պահպանում ենք image ֆայլը, եթե կա
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pencil_images', 'public');
        }

        // Պահպանում ենք images (gallery), եթե կա
        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('pencil_images', 'public');
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


        Pencil::create($data);

        return redirect()->route('pencil.index')->with('success', 'Նոր պենալը հաջողությամբ ավելացվեց։');
    }

    // Էդիթ էջ՝ փոփոխելու համար
    public function edit($id)
    {
        $pencil = Pencil::findOrFail($id);
        return view('pencil.edit', compact('pencil'));
    }

    // Թարմացում
    public function update(PencilRequest $request, $id)
    {
        $pencil = Pencil::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('pencil_images', 'public');
        }

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('pencil_images', 'public');
            }
            $data['images'] = json_encode($images);
        }

        if (isset($data['color']) && is_array($data['color'])) {
            $data['color'] = json_encode($data['color']);
        }

        if (isset($data['sizeRu']) && is_array($data['sizeRu'])) {
            $data['sizeRu'] = json_encode($data['sizeRu']);
        }

        $data['shape1'] = $request->has('shape1');
        $data['shape2'] = $request->has('shape2');


        $pencil->update($data);

        return redirect()->route('pencil.index')->with('success', 'Պենալը հաջողությամբ թարմացվեց։');
    }

    // Ջնջում
    public function destroy($id)
    {
        $pencil = Pencil::findOrFail($id);
        $pencil->delete();

        return redirect()->route('pencil.index')->with('success', 'Պենալը հաջողությամբ ջնջվեց։');
    }
}

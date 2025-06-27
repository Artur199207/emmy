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
}

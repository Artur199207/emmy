<?php

namespace App\Http\Controllers;

use App\Http\Requests\BathRequest;
use App\Models\Bath;
use Illuminate\Http\Request;

class BathController extends Controller
{
    public function index()
{
    $bath = Bath::all(); 
    return view('bath.index', compact('bath'));
}
    public function create()
    {
        return view('bath.create');
    }

 public function store(BathRequest $request)
{
    // Валидируем данные из запроса
    $data = $request->validated();

    // Сохраняем основное изображение, если оно есть
    if ($request->hasFile('image')) {
        $data['image'] = $request->file('image')->store('bath_images', 'public');
    }

    // Сохраняем галерею изображений, если есть
    if ($request->hasFile('images')) {
        $images = [];
        foreach ($request->file('images') as $imageFile) {
            $images[] = $imageFile->store('bath_images', 'public');
        }
        // Сохраняем как JSON строку
        $data['images'] = json_encode($images);
    }

    // Если цвет и размеры передаются как массив, конвертируем в JSON
    if (isset($data['color']) && is_array($data['color'])) {
        $data['color'] = json_encode($data['color']);
    }

    if (isset($data['sizeRu']) && is_array($data['sizeRu'])) {
        $data['sizeRu'] = json_encode($data['sizeRu']);
    }

  
    Bath::create($data);

    return redirect()->route('bath.index')->with('success', 'Новый элемент успешно добавлен.');

}
public function edit($id)
{
    $bath = Bath::findOrFail($id);
    return view('bath.edith', compact('bath'));
}
  

    // Թարմացնում ենք տվյալ bath-ը
    public function update(BathRequest $request, $id)
    {
        $bath = Bath::findOrFail($id);
        $data = $request->validated();

        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('bath_images', 'public');
        }

        if ($request->hasFile('images')) {
            $images = [];
            foreach ($request->file('images') as $imageFile) {
                $images[] = $imageFile->store('bath_images', 'public');
            }
            $data['images'] = json_encode($images);
        }

        if (isset($data['color']) && is_array($data['color'])) {
            $data['color'] = json_encode($data['color']);
        }

        if (isset($data['sizeRu']) && is_array($data['sizeRu'])) {
            $data['sizeRu'] = json_encode($data['sizeRu']);
        }

        $bath->update($data);

        return redirect()->route('bath.index')->with('success', 'Элемент успешно обновлен.');
    }

    // Ջնջում ենք bath-ը
    public function destroy($id)
    {
        $bath = Bath::findOrFail($id);
        $bath->delete();

        return redirect()->route('bath.index')->with('success', 'Элемент успешно удалён.');
    }

   



}

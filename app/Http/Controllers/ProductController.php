<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProductRequest;
use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function index()
    {
        $products = Product::all();
        return view('products.index', compact('products'));
    }
    public function create()
    {
        return view('products.create');
    }
    public function store(ProductRequest $request)
    {
        $validated = $request->validate([
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'price' => 'required|numeric',
            'newPrice' => 'nullable|numeric',
            'image' => 'image|mimes:jpeg,png,jpg,gif|max:35000',
            'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:35000',
            'spaceNameRu' => 'required|string',
            'spaceNameEn' => 'required|string',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'categoryRu' => 'required|string',
            'categoryEn' => 'required|string',
            'weigthRu' => 'required|string',
            'weigthEn' => 'required|string',
            'BoxRu' => 'required|string',
            'BoxEn' => 'required|string',
            'sizeRu' => 'nullable|array',
            'sizeRu.*' => 'string',
            'informationRu' => 'required|string',
            'informationEn' => 'required|string',
            'payRu' => 'required|string',
            'payEn' => 'required|string',
            'DeliveryRu' => 'required|string',
            'DeliveryEn' => 'required|string',
        ]);


        $mainImage = $request->file('image')->store('products', 'public');

        $imagePaths = [];
        if ($request->hasFile('images')) {
            foreach ($request->file('images') as $file) {
                $imagePaths[] = $file->store('products', 'public');
            }
        }

        $products = new Product;
        $products->titleRu = $validated['titleRu'];
        $products->titleEn = $validated['titleEn'];
        $products->price = $validated['price'];
        $products->newPrice = $validated['newPrice'] ?? null;
        $products->image = $mainImage;
        $products->images = json_encode($imagePaths);
        $products->spaceNameRu = $validated['spaceNameRu'];
        $products->spaceNameEn = $validated['spaceNameEn'];
        $products->descriptionRu = $validated['descriptionRu'];
        $products->descriptionEn = $validated['descriptionEn'];
        $products->categoryRu = $validated['categoryRu'];
        $products->categoryEn = $validated['categoryEn'];
        $products->weigthRu = $validated['weigthRu'];
        $products->weigthEn = $validated['weigthEn'];
        $products->BoxRu = $validated['BoxRu'];
        $products->BoxEn = $validated['BoxEn'];
        $products->sizeRu = json_encode($validated['sizeRu'] ?? []);
        $products->informationRu = $validated['informationRu'];
        $products->informationEn = $validated['informationEn'];
        $products->payRu = $validated['payRu'];
        $products->payEn = $validated['payEn'];
        $products->DeliveryRu = $validated['DeliveryRu'];
        $products->DeliveryEn = $validated['DeliveryEn'];

        $products->save();

        return redirect()->route('products.index')->with('success', 'Продукт успешно добавлен.');
    }
    public function show($id)
    {
        $product = Product::findOrFail($id);
        return view('products.show', compact('product'));
    }
    public function edit($id)
    {
        $product = Product::findOrFail($id);
        return view('products.edit', compact('product'));
    }
    public function update(ProductRequest $request, $id)
{
    $product = Product::findOrFail($id); 

    $validated = $request->validated();

    $product->titleRu = $validated['titleRu'];
    $product->titleEn = $validated['titleEn'];
    $product->price = $validated['price'];
    $product->newPrice = $validated['newPrice'] ?? null;

    if ($request->hasFile('image')) {
        $product->image = $request->file('image')->store('products', 'public');
    }

    if ($request->hasFile('images')) {
        $imagePaths = [];
        foreach ($request->file('images') as $file) {
            $imagePaths[] = $file->store('products', 'public');
        }
        $product->images = json_encode($imagePaths);
    }

    $product->spaceNameRu = $validated['spaceNameRu'];
    $product->spaceNameEn = $validated['spaceNameEn'];
    $product->descriptionRu = $validated['descriptionRu'];
    $product->descriptionEn = $validated['descriptionEn'];
    $product->categoryRu = $validated['categoryRu'];
    $product->categoryEn = $validated['categoryEn'];
    $product->weigthRu = $validated['weigthRu'];
    $product->weigthEn = $validated['weigthEn'];
    $product->BoxRu = $validated['BoxRu'];
    $product->BoxEn = $validated['BoxEn'];
    $product->sizeRu = json_encode($validated['sizeRu'] ?? []);
    $product->informationRu = $validated['informationRu'];
    $product->informationEn = $validated['informationEn'];
    $product->payRu = $validated['payRu'];
    $product->payEn = $validated['payEn'];
    $product->DeliveryRu = $validated['DeliveryRu'];
    $product->DeliveryEn = $validated['DeliveryEn'];

    $product->save();

    return redirect()->route('products.index')->with('success', 'Продукт успешно обновлен.');
}
public function destroy($id)
{
    $product = Product::findOrFail($id);
    $product->delete(); 

    return redirect()->route('products.index')->with('success', 'Продукт успешно удален.');
}


}

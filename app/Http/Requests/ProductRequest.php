<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class ProductRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
{
    return [
        'titleRu' => 'required|string|max:255',
        'titleEn' => 'required|string|max:255',
        'price' => 'required|numeric',
        'newPrice' => 'nullable|numeric',
        'image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:35000',
        'images.*' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:35000',

        'spaceNameRu' => 'required|string|max:255',
        'spaceNameEn' => 'required|string|max:255',
        'descriptionRu' => 'required|string',
        'descriptionEn' => 'required|string',
        'categoryRu' => 'required|string|max:255',
        'categoryEn' => 'required|string|max:255',
        'weigthRu' => 'required|string|max:255',
        'weigthEn' => 'required|string|max:255',
        'BoxRu' => 'required|string|max:255',
        'BoxEn' => 'required|string|max:255',

        'sizeRu' => 'nullable|array',
        'sizeRu.*' => 'string|max:50',

        'informationRu' => 'required|string',
        'informationEn' => 'required|string',
        'payRu' => 'required|string',
        'payEn' => 'required|string',
        'DeliveryRu' => 'required|string',
        'DeliveryEn' => 'required|string',
    ];
}

}

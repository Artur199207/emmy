<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class MirrorRequest extends FormRequest
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
         return
         [
            'available' => 'required|boolean',
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'priceRu' => 'required|string|max:255',
            'articleRu' => 'required|string|max:255',
            'articleEn' => 'required|string|max:255',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'DeliveryRu' => 'required|string',
            'DeliveryEn' => 'required|string',
            'informationRu' => 'required|string',
            'informationEn' => 'required|string',
            'payRu' => 'required|string',
            'payEn' => 'required|string',
            'color' => 'nullable|array',
            'color.*' => ['regex:/^#[0-9A-Fa-f]{6}$/'],
            'sizeRu' => 'required|array',
            'sizeRu.*' => 'string|max:255',
            'images' => 'nullable|array',
            'images.*' => 'image|mimes:jpeg,png,jpg,gif|max:35000',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:35000',

            // Նոր boolean դաշտերի վալիդացիա (checkbox)
            'Shape1' => 'nullable|boolean',
            'Shape2' => 'nullable|boolean',

            // Նշումներ (annotation) տեքստային դաշտեր
            'annotationRu' => 'nullable|string',
            'annotationEn' => 'nullable|string',
        ];
    }
}

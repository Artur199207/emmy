<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class BlogFormRequest extends FormRequest
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
        $rules = [
            'dataRu' => 'required|string|max:255',
            'dataEn' => 'required|string|max:255',
            'titleRu' => 'required|string|max:50',
            'titleEn' => 'required|string|max:50',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'informationRu' => 'required|string',
            'informationEn' => 'required|string',
        ];

        if ($this->isMethod('post')) {
           
            $rules['image'] = 'required|image|mimes:jpeg,png,jpg,gif|max:350000';
        } elseif ($this->isMethod('put') || $this->isMethod('patch')) {
          
            $rules['image'] = 'nullable|image|mimes:jpeg,png,jpg,gif|max:350000';
        }

        return $rules;
    }
}

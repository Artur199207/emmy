<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class TeamFormReaquest extends FormRequest
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
            'titleRu' => 'required|string|max:255',
            'titleEn' => 'required|string|max:255',
            'descriptionRu' => 'required|string',
            'descriptionEn' => 'required|string',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:35000',


        ];
    }
}

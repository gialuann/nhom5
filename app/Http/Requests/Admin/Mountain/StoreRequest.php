<?php

namespace App\Http\Requests\Admin\Mountain;

use Illuminate\Foundation\Http\FormRequest;

class StoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'country_id' => 'required',
            'name' => 'required|unique:mountains,name',
            'height' => 'required|numeric',
            'image' => 'required|mimes:png,jpg,bmp,jpeg',

        ];
    }

    public function messages(): array
    {
        return [
            'country_id.required' => 'Please select your country',
            'name.required' => 'Please enter mountain name',
            'name.unique' => 'Mountains already exist',
            'height.required' => 'Please enter the mountain altitude',
            'height.numeric' => 'altitude must be numeric',
            'image.required' => 'Please select image',
            'image.mimes' => 'The image must have the extension (png,jpg,bmp,jpeg)',
        ];
    }
}

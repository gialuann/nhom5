<?php

namespace App\Http\Requests\Admin\Mountain;

use Illuminate\Foundation\Http\FormRequest;

class UpdateRequest extends FormRequest
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
            'name' => 'required|unique:mountains,name,'.$this->id,
            'height' => 'required|numeric',
            'content' => 'required',
        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter mountain name',
            'name.unique' => 'Mountains already exist',
            'height.required' => 'Please enter the mountain altitude',
            'height.numeric' => 'altitude must be numeric',
            'content.required' => 'Please enter content',
        ];
    }
}

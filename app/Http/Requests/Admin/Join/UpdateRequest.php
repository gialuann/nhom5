<?php

namespace App\Http\Requests\Admin\Join;

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
            'name' => 'required',
            'infomation' => 'required',
            'quantity' => 'required|numeric',
            'date' => 'required',

        ];
    }

    public function messages(): array
    {
        return [
            'name.required' => 'Please enter Tour name',
            'infomation.required' => 'Please enter Tour infomation',
            'quantity.numeric' => 'quantity must be numeric',
            'quantity.required' => 'please enter member quantity',
            'date.required' => 'Please choose date',
        ];
    }
}

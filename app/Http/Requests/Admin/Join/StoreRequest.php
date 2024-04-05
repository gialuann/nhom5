<?php

namespace App\Http\Requests\Admin\Join;

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
            'infomation' => 'required',
            'quantity' => 'required|numeric',
            'date' => 'required|after:today',
        ];
    }

    public function messages(): array
    {
        return [
            'infomation.required' => 'Please enter Tour infomation',
            'quantity.numeric' => 'quantity must be numeric',
            'quantity.required' => 'please enter member quantity',
            'date.required' => 'Please choose date',
            'date.after:today' => 'Dates in the past cannot be selected',

        ];
    }
}

<?php

namespace App\Http\Requests\Admin\User;

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
            'email'=>'required|email|unique:users,email',
            'password'=>'required|confirmed',
            'fullname'=>'required',
            'phone'=>'required'

        ];
    }
    public function messages(): array
    {
        return [
            'email.required'=>'please enter email',
            'email.unique'=>'This email already exists. Please enter another email ',
            'email.email'=>' Please enter in @______.com format',
            'fullname.required'=>'Please enter Full Name',
            'phone.required'=>'Please enter the phone number',
            'password.required'=>'Please enter your password',
            'password.confirmed'=>'The re-entered password does not match'
        ];
    }
}

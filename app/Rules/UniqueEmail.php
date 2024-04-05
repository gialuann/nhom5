<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;
use App\Models\User;

class UniqueEmail implements Rule
{
    public function __construct()
    {
        //
    }

    public function passes($attribute, $value)
    {
        // Kiểm tra xem địa chỉ email đã tồn tại trong cơ sở dữ liệu hay không
        return !User::where('email', $value)->exists();
    }

    public function message()
    {
        return 'Địa chỉ email đã được sử dụng.';
    }
}
<?php

namespace App\Rules;

use Illuminate\Validation\Rule;
// use Illuminate\Contracts\Validation\Rule;

class ChuHoa implements Rule
{
    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        //
        return strtoupper($value) == $value;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'Bạn cần nhập vào chữ in hoa';
    }
}

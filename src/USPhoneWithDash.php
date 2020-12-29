<?php

namespace Risan\LaraRules;

use Illuminate\Contracts\Validation\Rule;

class USPhoneWithDash implements Rule
{
    public function passes($attribute, $value)
    {
        return is_string($value)
            && strlen($value) > 0
            && preg_match('/^[0-9]{3}-[0-9]{3}-[0-9]{4}$/', $value);
    }

    public function message()
    {
        return 'The :attribute is invalid.';
    }
}

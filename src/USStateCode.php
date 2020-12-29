<?php

namespace Risan\LaraRules;

use Illuminate\Contracts\Validation\Rule;

class USStateCode implements Rule
{
    public function passes($attribute, $value)
    {
        return is_string($value)
            && strlen($value) > 0
            && array_key_exists($value, config('usStateCodes'));
    }

    public function message()
    {
        return 'The :attribute is invalid.';
    }
}

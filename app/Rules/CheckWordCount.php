<?php

namespace App\Rules;


use Illuminate\Contracts\Validation\Rule;

class CheckWordCount implements Rule
{
   protected $count;
    public function __construct($count)
    {
   $this->count=$count;
    }
    public function passes($attribute, $value)
    {
        return str_word_count($value) < $this->count;
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'The :attribute must be uppercase.';
    }
}

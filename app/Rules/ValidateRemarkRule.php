<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

// php artisan make:rule ValidateRemarkRule 

class ValidateRemarkRule implements Rule
{
    const PHONE = '/^(13[0-9]|14[579]|15[0-3,5-9]|17[0135678]|18[0-9])\\d{8}$/';  
    private $value; 
    
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        $this->value = $value;    
        return (bool) preg_match(self::PHONE, $value);
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        // return 'The validation error message.';
        return "手机号格式 {$this->value} 不正确";
    }
}

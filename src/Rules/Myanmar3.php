<?php
namespace Kanaung\Rules;

use Kanaung\Contracts\ConverterInterface;

class Myanmar3 implements ConverterInterface
{
    private static $rules = [
        'ka' => 'က',
    ];

    private static $corrections = [
        'ka_ra' => 'ကြ', //regular expression
    ];

    public function getRules()
    {
        return $this->rules;
    }

    public function getCorrections()
    {
        return $this->corrections;
    }
}

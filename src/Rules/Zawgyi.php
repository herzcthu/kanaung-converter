<?php
namespace Kanaung\Rules;

use Kanaung\Contracts\ConverterInterface;

class Zawgyi implements ConverterInterface
{
    private static $rules = [
        'ka' => 'က',
    ];

    private static $corrections = [
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

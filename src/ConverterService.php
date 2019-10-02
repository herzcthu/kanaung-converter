<?php
namespace Kanaung;

use Kanaung\Converter\Converter;
use Kanaung\Rules\ZawgyiUniRules;

class ConverterService
{
    public function test()
    {
        echo 'test';
    }

    public function convert($content, $from_font, $to_font, $options = [])
    {
        $converter = new Converter();
        return $converter->getConverted($content, $from_font, $to_font, $options = []);
    }

}

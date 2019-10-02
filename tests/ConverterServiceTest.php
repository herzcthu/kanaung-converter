<?php
namespace Kanaung\tests;

use Kanaung\ConverterService;
use PHPUnit\Framework\TestCase;

class ConverterServiceTest extends TestCase
{
    public function testZawgyiUnicode()
    {
        $content = "ေနေကာင္းလား";
        $from = "zawgyi";
        $to = "myanmar3";
        $converter = new ConverterService();
        $convert = $converter->convert($content, $from, $to);
        $result = "နေကောင်းလား";
        $this->assertEquals($result, $convert);
    }

    public function testUnicodeZawgyi()
    {
        $content = "နေကောင်းလား";
        $from = "unicode";
        $to = "zawgyi";
        $converter = new ConverterService();
        $convert = $converter->convert($content, $from, $to);
        $result = "ေနေကာင္းလား";
        $this->assertEquals($result, $convert);
    }
}

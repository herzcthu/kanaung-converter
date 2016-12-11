<?php
namespace Kanaung\tests;

use Kanaung\ConverterService;
use PHPUnit\Framework\TestCase;

class ConverterServiceTest extends TestCase
{
    public function testConverter()
    {
        $content = "ေနေကာင္းလား";
        $from = "zawgyi";
        $to = "myanmar3";
        $converter = new ConverterService();
        $convert = $converter->convert($content, $from, $to);
    }

    public function testConverterStatic()
    {
        $content = "ေနေကာင္းလား";
        $from = "zawgyi";
        $to = "myanmar3";
        $convert = ConverterService::convert($content, $from, $to);
    }
}

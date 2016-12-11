<?php
namespace Kanaung;

use Kanaung\Converter\Converter;

class ConverterService
{
    protected static $rules;

    protected static $corrections;

    public static function convert($content, $from_font, $to_font, $options = [])
    {
        self::rules($from_font, $to_font);
        self::corrections($from_font, $to_font);
        $converter = new Converter();
        $converter->setRules(self::$rules);
        $converter->setCorrections(self::$corrections);
        return $converter->convert($content);
        // convert($content, $from, $to, using $options if exists)
    }

    private static function rules($from_font, $to_font)
    {
        return self::$rules = [];
    }

    private static function corrections($from_font, $to_font)
    {
        return self::$corrections = [];
    }

    public function __call($name, $arguments)
    {
        if (method_exists($this, $name)) {
            return call_user_func(array($this, $name), $arguments);
        }

        // function does not exists~
        throw new \Exception('Tried to call unknown method ' . get_class($this) . '->' . $name);
    }

    public static function __callStatic($name, $arguments)
    {
        if (method_exists(__CLASS__, $name)) {
            return call_user_func(array(__CLASS__, $name), $arguments);
        }
        // function does not exists~
        throw new \Exception('Tried to call unknown method ' . __CLASS__ . '->' . $name);
    }

}

<?php
namespace Kanaung;

use Kanaung\Converter\Converter;
use Kanaung\Rules\Rules;

class ConverterService
{
    protected static $rules;

    protected static $rules_name;

    protected static $corrections;

    public static function convert($content, $from_font, $to_font, $options = [])
    {
        self::setRulesName($from_font, $to_font);
        $rules_name = self::getRules();
        $converter = new Converter();
        $rules = $rules_name['rules'];
        $corrections = $rules_name['corrections'];
        $converter->setRules($rules);
        $converter->setCorrections($corrections);
        return $converter->convert($content);
    }

    private function setRulesName($from_font, $to_font)
    {
        self::$rules_name = strtolower($from_font) . '_' . strtolower($to_font);
    }

    private function getRules()
    {
        $rules_name = self::$rules_name;
        $rules = new Rules();
        return $rules->{$rules_name};
    }

    public function setRules(array $rulesArray)
    {
        $rules_name = self::$rules_name;
        $rules = new Rules();
        $rules->{$rules_name} = $rulesArray;
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

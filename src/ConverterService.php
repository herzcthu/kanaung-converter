<?php
namespace Kanaung;

use Kanaung\Converter\Converter;
use Kanaung\Rules\Rules;

class ConverterService
{
    protected $rules;

    protected $rules_name;

    protected $corrections;

    public function test()
    {
        echo 'test';
    }

    public function convert($content, $from_font, $to_font, $options = [])
    {
        $this->setRulesName($from_font, $to_font);
        $rules_name = $this->getRules();
        $converter = new Converter();
        $rules = $rules_name['rules'];
        $corrections = $rules_name['corrections'];
        $converter->setRules($rules);
        $converter->setCorrections($corrections);
        return $converter->convert($content);
    }

    private function setRulesName($from_font, $to_font)
    {
        $this->rules_name = strtolower($from_font) . '_' . strtolower($to_font);
    }

    private function getRules()
    {
        $rules_name = $this->rules_name;
        $rules = new Rules();
        return $rules->{$rules_name};
    }

    public function setRules(array $rulesArray)
    {
        $rules_name = $this->rules_name;
        $rules = new Rules();
        $rules->{$rules_name} = $rulesArray;
    }

}

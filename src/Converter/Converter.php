<?php
namespace Kanaung\Converter;

use Kanaung\Rules\RulesInterface;

class Converter
{
    protected $rules;

    protected $corrections;

    protected $content;

    protected $options;

    /**
     * Convert content from one encoding to another
     * @param string $content Content of text to convert
     * @param $fromFont
     * @param $toFont
     * @param array $options
     * @return string          Converted text
     */
    public function getConverted($content, $fromFont, $toFont, $options = [])
    {
        $this->content = $content;
        $this->options = $options;

        try{
            $ruleClass = $this->getClass($fromFont, $toFont);

            $this->rules = $ruleClass->rules();
            $this->corrections = $ruleClass->correction();
        }catch (\TypeError $exception){
            return $exception;
        }


        return $this->convert();
    }

    private function convert()
    {
        $result = strtr($this->content, $this->rules);
        return $this->correct($result);
    }

    /**
     * Correct any ordering or encoding error using regular expression
     * @param  string $content Content of text to correct
     * @return string          Corrected text
     */
    private function correct($content)
    {
        $corrections = $this->corrections;
        if (!empty($corrections)) {
            foreach ($corrections as $pattern => $replacement) {
                $reg_count = 0;

                /**
                 * @var $content
                 * reassign $content to corrected $content as long as corrections
                 * rules array loop
                 */
                $content = preg_replace('/' .
                    $pattern .
                    '/us', $replacement, $content, -1, $reg_count);
            }
        }
        return $content;
    }

    private function getClass($from_font, $to_font) : RulesInterface
    {
        $from = $this->getFontName($from_font) ?? $from_font;
        $to = $this->getFontName($to_font) ?? $to_font;

        if($from !== $to) {
            $className = "Kanaung\\Rules\\". ucfirst($from) . ucfirst($to) . "Rules";
            if ($className !== null) {
                // check hierarchy (this will attempt auto loading)
                if (class_exists($className) && is_subclass_of($className, "Kanaung\\Rules\\RulesInterface")) {
                    return new $className();
                }
            }
        }
    }

    private function getFontName($font)
    {
        if(preg_match('/.*zawgyi.*/', $font, $match)) return "Zawgyi";
        if(preg_match('/.*uni|myanmar3|padauk|pyidaungsu.*/', $font, $match)) return "Uni";
    }

}

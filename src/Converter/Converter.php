<?php
namespace Kanaung\Converter;

class Converter
{

    protected $rules;

    protected $corrections;

    /**
     * Convert content from one encoding to another
     * @param  string $content Content of text to convert
     * @return string          Converted text
     */
    public function convert($content)
    {
        $result = strtr($content, $this->rules);
        return $this->correct($result);
    }

    /**
     * rules setter
     * @param  array  $rules [Convertion rules]
     * @return $this
     */
    public function setRules(array $rules)
    {
        $this->rules = $rules;
        return $this;
    }

    /**
     * corrections setter
     * @param  array  $corrections [Correction rules]
     * @return $this
     */
    public function setCorrections(array $corrections)
    {
        $this->corrections = $corrections;
        return $this;
    }

    /**
     * Correct any ordering or encoding error using regular expression
     * @param  string $content Content of text to correct
     * @return string          Corrected text
     */
    protected function correct($content)
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
}

<?php
namespace Kanaung\Rules;

interface RulesInterface
{
    // return key value array for replacement string
	public function rules() : array;

	/**
     * return key value array for ordering and correction regex
     * key being pattern and value being replacement
     * */
	public function correction() : array;
}
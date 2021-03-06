<?php
namespace Kanaung\Rules;

class Rules
{
    protected $zawgyi_unicode = [
        'rules' => [
            'ဳ' => 'ု',
            'ဴ' => 'ူ',
            '္' => '်',
            '်' => 'ျ',
            'ျ' => 'ြ',
            'ြ' => 'ွ',
            'ွ' => 'ှ',
            'ၚ' => 'ါ်',
            'ၠ' => '္က',
            'ၡ' => '္ခ',
            'ၢ' => '္ဂ',
            'ၣ' => '္ဃ',
            'ၤ' => 'င်္',
            'ၥ' => '္စ',
            'ၦ' => '္ဆ',
            'ၧ' => '္ဆ',
            'ၨ' => '္ဇ',
            'ၩ' => '္ဈ',
            'ၪ' => 'ဉ',
            'ၫ' => 'ည',
            'ၬ' => '္ဋ',
            'ၭ' => '္ဌ',
            'ၮ' => 'ဍ္ဍ',
            'ၯ' => 'ဍ္ဎ',
            'ၰ' => '္ဏ',
            'ၱ' => '္တ',
            'ၲ' => '္တ',
            'ၳ' => '္ထ',
            'ၴ' => '္ထ',
            'ၵ' => '္ဒ',
            'ၶ' => '္ဓ',
            'ၷ' => '္န',
            'ၷ' => '္ပ',
            'ၹ' => '္ဖ',
            'ၺ' => '္ဗ',
            'ၻ' => '္ဘ',
            'ၼ' => '္မ',
            'ၽ' => 'ျ',
            'ၾ' => 'ြ',
            'ၿ' => 'ြ',
            'ႀ' => 'ြ',
            'ႁ' => 'ြ',
            'ႂ' => 'ြ',
            'ႃ' => 'ြ',
            'ႄ' => 'ြ',
            'ႅ' => '္လ',
            'ႆ' => 'ဿ',
            'ႇ' => 'ှ',
            'ႈ' => 'ှု',
            'ႉ' => 'ှူ',
            'ႊ' => 'ွှ',
            'ႏ' => 'န',
            '႐' => 'ရ',
            '႑' => 'ဏ္ဍ',
            '႒' => 'ဋ္ဌ',
            '႓' => '္ဘ',
            '႔' => '့',
            '႕' => '့',
            '႗' => 'ဋ္ဋ',
            '၈ၤ' => 'ဂင်္',
            'ဧ။္' => '၏',
            '၄​င္း' => '၎င်း',
            '၎' => '၎င်း',
            '၎င္း' => '၎င်း',
            'ေ၀' => 'ေဝ',
            'ေ၇' => 'ေရ',
            'ေ၈' => 'ေဂ',
            'စ်' => 'ဈ',
            'ဥ​ာ' => 'ဉာ​',
            'ဥ​္' => 'ဉ်',
            'ၾသ' => 'ဩ',
            'ေၾသာ္' => 'ဪ',
        ],
        'corrections' => [
            '([ေြ]|ေြ)([က-အ၀၈၇])' => '$2$1',
            '([က-အ၀၈၇])(ေ)([ျ	ြ	ွ		ဲ	ှ	]+)' => '$1$3$2',
            '([	ု		ူ	])([	ိ		ီ	])' => '$2$1',
            '(|ွှ|[ှွ])(ျ)' => '$2$1',
            '([	ံ	်	])([	ွ		ှ	ုူ])' => '$2$1',
            '([က-အ])([က-အ])(င်္)' => '$1$3$2',
            '([က-အ])ေင်္' => 'င်္$1ေ',
        ],
    ];

    protected $unicode_zawgyi = [
        'rules' => [
            '်' => '္',
            'ျ' => '်',
            'ြ' => 'ျ',
            'ွ' => 'ြ',
            'ှ' => 'ွ',
            'ါ်' => 'ၚ',
            'ျံ[့႔႕]' => '်ံ႕',
            '္က' => 'ၠ',
            '္ခ' => 'ၡ',
            '္ဂ' => 'ၢ',
            '္ဃ' => 'ၣ',
            'င်္' => 'ၤ',
            '္စ' => 'ၥ',
            '္ဆ' => 'ၦ',
            '္ဇ' => 'ၨ',
            '္ဈ' => 'ၩ',
            'ဉ' => 'ဥ',
            '္ဋ' => 'ၬ',
            '္ဌ' => 'ၭ',
            'ဍ္ဍ' => 'ၮ',
            'ဍ္ဎ' => 'ၯ',
            '္ဏ' => 'ၰ',
            '္တ' => 'ၱ',
            '္ထ' => 'ၳ',
            '္ဒ' => 'ၵ',
            '္ဓ' => 'ၶ',
            '္န' => 'ၷ',
            '္ပ' => 'ၼ',
            '္ဖ' => 'ၹ',
            '္ဗ' => 'ၺ',
            '္ဘ' => 'ၻ',
            '္မ' => 'ၼ',
            '္လ' => 'ႅ',
            'ဿ' => 'ႆ',
            'ဏ္ဍ' => '႑',
            'ဋ္ဌ' => '႒',
            '္ဘ' => '႓',
            'ဋ္ဋ' => '႗',
            '၀ေ' => 'ေဝ',
            '၇ေ' => 'ေရ',
            '၈ေ' => 'ေဂ',
            '၎င်း' => '၎',
            'ဉ္' => 'ဥ္',
        ],
        'corrections' => [
            '([	့႔႕	])([	ိ	ီ	ု	ူ	္])' => '$2$1',
            '(ၤ)([က-အ])' => '$2$1',
            '([က-အ])([ၠ-ၣၥ-ၩၬၭၰ-ၼႅ႓႖])(ျေ|ေ|ျ)' => '$1$3$2',
            '([က-အ][	်	ျ	ြ	ွ	ႊ]+)(ေ)' => '$2$1',
            '([က-အဩ])(ျေ|ေ|ျ)' => '$2$1',
            '([း၊။])([	ိ	ီ	္	့	ဲ])' => '$2$1',
            '([	ု	့	])([	်	ံ])' => '$2$1',
            '([ျ])([ေ])' => '$2$1',
        ],
    ];

    public function __set($name, $value)
    {
        $this->{$name} = $value;
    }

    public function __get($name)
    {
        return $this->{$name};
    }
}

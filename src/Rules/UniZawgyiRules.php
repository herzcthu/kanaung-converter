<?php
namespace Kanaung\Rules;

class UniZawgyiRules implements RulesInterface
{
    public function rules(): array
    {
        return [
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
        ];
    }

    public function correction(): array
    {
        return [
            '([	့႔႕	])([	ိ	ီ	ု	ူ	္])' => '$2$1',
            '(ၤ)([က-အ])' => '$2$1',
            '([က-အ])([ၠ-ၣၥ-ၩၬၭၰ-ၼႅ႓႖])(ျေ|ေ|ျ)' => '$1$3$2',
            '([က-အ][	်	ျ	ြ	ွ	ႊ]+)(ေ)' => '$2$1',
            '([က-အဩ])(ျေ|ေ|ျ)' => '$2$1',
            '([း၊။])([	ိ	ီ	္	့	ဲ])' => '$2$1',
            '([	ု	့	])([	်	ံ])' => '$2$1',
            '([ျ])([ေ])' => '$2$1',
        ];
    }

}

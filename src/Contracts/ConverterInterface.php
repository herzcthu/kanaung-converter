<?php
namespace Kanaung\Contracts;

interface ConverterInterface
{
    public function getRules(): array;

    public function getCorrections(): array;
}

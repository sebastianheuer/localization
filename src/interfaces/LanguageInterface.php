<?php
namespace belanur\localization;

interface LanguageInterface
{
    const WELCOME = 'Hello and welcome, {0}';
    const FOO = 'Some other text';
    const PRICE = 'This product costs {0,number} EUR';

    /**
     * @abstract
     * @param string $key
     */
    public function getText($key);

    public function getLanguageCode();
}
<?php
namespace belanur\localization;

abstract class AbstractCountry implements CountryInterface
{
    const COUNTRY_CODE = '';

    const DEFAULT_LANG = '';

    public function getDefaultLanguage()
    {
        return static::DEFAULT_LANG;
    }

    public function getCountryCode()
    {
        return static::COUNTRY_CODE;
    }

}
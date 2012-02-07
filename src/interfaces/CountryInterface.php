<?php
namespace belanur\localization;

interface CountryInterface
{
    /**
     * returns the two-digit ISO code of the country, e.g. 'US'
     *
     * @abstract
     */
    public function getCountryCode();

    /**
     * returns the two-digit default language for the coutry, e.g. 'en'
     *
     * @abstract
     */
    public function getDefaultLanguage();
}
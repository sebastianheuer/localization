<?php
namespace belanur\localization;

interface CountryInterface
{
    public function getCountryCode();

    public function getDefaultLanguage();
}
<?php
namespace belanur\localization;

class UnitedStates extends AbstractCountry
{
    const DEFAULT_LANG = 'en';

    /**
     * @return string
     */
    public function getLocale()
    {
        return 'en-US';
    }

}
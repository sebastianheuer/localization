<?php
namespace belanur\localization;

class Germany extends AbstractCountry
{
    const DEFAULT_LANG = 'de';

    /**
     * @return string
     */
    public function getLocale()
    {
        return 'de-DE';
    }

}
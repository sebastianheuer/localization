<?php
namespace belanur\localization;

/**
 * creates Country objects based on ISO country code
 */
class CountryFactory implements FactoryInterface
{
    /**
     * @param string $type
     * @return \belanur\localization\CountryInterface
     */
    public function getInstanceFor($type)
    {
        switch ($type) {
            case 'DE':
                return new Germany();
            case 'US':
            default:
                return new UnitedStates();
        }
    }

}
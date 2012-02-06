<?php
namespace belanur\localization;

/**
 * creates Country objects based on ISO country code
 */
class CountryFactory implements FactoryInterface
{
    /**
     * @var \belanur\localization\LocalizationInterface
     */
    protected $_localization;

    /**
     * @param LocalizationInterface $localization
     */
    public function __construct(LocalizationInterface $localization)
    {
        $this->_localization = $localization;
    }

    /**
     * @param string $type
     * @return \belanur\localization\CountryInterface
     */
    public function getInstanceFor($type)
    {
        switch ($type) {
            case 'DE':
                return new Germany($this->_localization);
            case 'US':
            default:
                return new UnitedStates($this->_localization);
        }
    }

}
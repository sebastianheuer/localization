<?php
namespace belanur\localization;

abstract class AbstractCountry implements CountryInterface
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
     * @return LocalizationInterface
     */
    public function getLocalization()
    {
        return $this->_localization;
    }


}
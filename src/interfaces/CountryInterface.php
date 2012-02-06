<?php
namespace belanur\localization;

interface CountryInterface
{
    /**
     * @abstract
     */
    public function getLocale();

    /**
     * @abstract
     * @param \belanur\localization\LocalizationInterface $localization
     */
    public function __construct(LocalizationInterface $localization);

    /**
     * @abstract
     * @return \belanur\localization\LocalizationInterface
     */
    public function getLocalization();
}
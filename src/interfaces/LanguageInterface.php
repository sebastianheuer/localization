<?php
namespace belanur\localization;

interface LanguageInterface
{
    /**
     * returns the two-digit language code, e.g. 'en'
     *
     * @abstract
     * @return string
     */
    public function getLanguageCode();

    /**
     * @abstract
     * @param string $username
     * @return string
     */
    public function getWelcomeMessage($username);

    /**
     * @param string $sku
     * @param float $price
     * @return string
     */
    public function getPriceInformationMessage($sku, $price);
}
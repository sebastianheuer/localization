<?php
namespace belanur\localization;

class German extends AbstractLanguage
{
    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return 'de';
    }

    /**
     * @param string $username
     * @return string
     */
    public function getWelcomeMessage($username)
    {
        $text = 'Herzlich Willkommen, {0}';
        return $this->_getFormattedText($text, array($username));
    }

    /**
     * @param string $sku
     * @param float $price
     * @return string
     */
    public function getPriceInformationMessage($sku, $price)
    {
        $text = 'Der Artikel {0} kostet {1,number} EUR';
        return $this->_getFormattedText($text, array($sku, $price));
    }
}


<?php
namespace belanur\localization;

class English extends AbstractLanguage
{
    /**
     * @return string
     */
    public function getLanguageCode()
    {
        return 'en';
    }

    /**
     * @param string $username
     * @return string
     */
    public function getWelcomeMessage($username)
    {
        $text = 'Hello {0}, welcome!';
        return $this->_getFormattedText($text, array($username));
    }

    /**
     * @param string $sku
     * @param float $price
     * @return string
     */
    public function getPriceInformationMessage($sku, $price)
    {
        $text = 'Product with sku {0} costs EUR {1,number}';
        return $this->_getFormattedText($text, array($sku, $price));
    }

}


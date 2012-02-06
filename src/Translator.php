<?php
namespace belanur\localization;

class Translator
{
    /**
     * @var \belanur\localization\CountryInterface
     */
    protected $_country;

    /**
     * @param CountryInterface $country
     */
    public function __construct(CountryInterface $country)
    {
        $this->_country = $country;
    }

    /**
     * @param string $key
     * @param array $params
     * @return string
     */
    public function getText($key, array $params = array())
    {
        $text = $this->_country->getLocalization()->getText($key);
        $text = \MessageFormatter::formatMessage(
            $this->_country->getLocale(), $text, $params
        );
        return $text;
    }
}

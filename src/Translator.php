<?php
namespace belanur\localization;

class Translator
{
    /**
     * @var \belanur\localization\CountryInterface
     */
    protected $_country;

    /**
     * @var \belanur\localization\LanguageInterface
     */
    protected $_language;

    /**
     * @param \belanur\localization\CountryInterface $country
     * @param \belanur\localization\LanguageInterface $language
     */
    public function __construct(CountryInterface $country, LanguageInterface $language)
    {
        $this->_country = $country;
        $this->_language = $language;
    }

    /**
     * @param string $key
     * @param array $params
     * @return string
     */
    public function getText($key, array $params = array())
    {
        $text = $this->_language->getText($key);
        $text = \MessageFormatter::formatMessage(
            $this->_getLocale(), $text, $params
        );
        return $text;
    }

    /**
     * @return string
     */
    protected function _getLocale()
    {
        $locale = $this->_language->getLanguageCode() . '-' . $this->_country->getCountryCode();
        return $locale;
    }
}

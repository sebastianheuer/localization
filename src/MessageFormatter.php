<?php
namespace belanur\localization;

/**
 * Proxy Class for MessageFormatter
 */
class MessageFormatter
{
    /**
     * @var \MessageFormatter
     */
    protected $_formatter;

    /**
     * @param string $locale
     */
    public function __construct($locale)
    {
        /**
         * We need to pass a whitespace instead of an empty string
         * @see http://www.php.net/manual/de/messageformatter.create.php#93896
         */
        $this->_formatter = new \MessageFormatter($locale, ' ');
    }

    /**
     * @param string $pattern
     * @param array $argsarray
     * @return string
     */
    public function format($pattern, array $argsarray = array())
    {
        $this->_formatter->setPattern($pattern);
        return $this->_formatter->format($argsarray);
    }
}
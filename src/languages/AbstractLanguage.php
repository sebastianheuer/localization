<?php
namespace belanur\localization;

/**
 * AbstractLanguage
 *
 * <DESCRIPTION>
 */
abstract class AbstractLanguage implements LanguageInterface
{
    /**
     * @var \belanur\localization\MessageFormatter
     */
    protected $_formatter;

    /**
     * @param \belanur\localization\MessageFormatter $formatter
     */
    public function __construct(MessageFormatter $formatter)
    {
        $this->_formatter = $formatter;
    }

    /**
     * @param string $text
     * @param array $params
     * @return string
     */
    protected function _getFormattedText($text, array $params = array())
    {
        return $this->_formatter->format($text, $params);
    }
}
 
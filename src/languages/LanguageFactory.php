<?php
namespace belanur\localization;

/**
 * creates Language objects based on language code
 */
class LanguageFactory implements FactoryInterface
{
    /**
     * @var \belanur\localization\MessageFormatter
     */
    protected $_formatter;

    /**
     * @param MessageFormatter $formatter
     */
    public function __construct(MessageFormatter $formatter)
    {
        $this->_formatter = $formatter;
    }

    /**
     * @param string $type
     * @return \belanur\localization\LanguageInterface
     */
    public function getInstanceFor($type)
    {
        switch ($type) {
            case 'de':
                return new German($this->_formatter);
            case 'en':
            default:
                return new English($this->_formatter);
        }
    }
}
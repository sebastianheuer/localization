<?php
namespace belanur\localization;

/**
 * creates Language objects based on language code
 */
class LanguageFactory implements FactoryInterface
{
    /**
     * @param string $type
     * @return \belanur\localization\LanguageInterface
     */
    public function getInstanceFor($type)
    {
        switch ($type) {
            case 'de':
                return new German();
            case 'en':
            default:
                return new English();
        }
    }
}
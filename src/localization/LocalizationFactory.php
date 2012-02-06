<?php
namespace belanur\localization;

/**
 * creates Localization objects based on language code
 */
class LocalizationFactory implements FactoryInterface
{
    /**
     * @param string $type
     * @return \belanur\localization\LocalizationInterface
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
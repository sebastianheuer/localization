<?php
namespace belanur\localization;

class AbstractLanguage implements LanguageInterface
{
    const LANGUAGE_CODE = '';

    /**
     * @param string $key
     * @return mixed
     */
    public function getText($key)
    {
        return constant(get_class($this) . '::' . $key);
    }

    public function getLanguageCode()
    {
        return static::LANGUAGE_CODE;
    }


}


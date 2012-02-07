<?php
namespace belanur\localization;

class AbstractLanguage implements LanguageInterface
{
    /**
     * a two-digit language code, e.g. 'en'
     */
    const LANGUAGE_CODE = '';

    /**
     * returns a text for $key
     *
     * @param string $key
     * @return mixed
     */
    public function getText($key)
    {
        return constant(get_class($this) . '::' . $key);
    }

    /**
     * returns a two-digit language code, e.g. 'en'
     *
     * @return string
     */
    public function getLanguageCode()
    {
        return static::LANGUAGE_CODE;
    }


}


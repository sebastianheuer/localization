<?php
namespace belanur\localization;

class AbstractLocalization implements LocalizationInterface
{
    /**
     * @param string $key
     * @return mixed
     */
    public function getText($key)
    {
        return constant(get_class($this) . '::' . $key);
    }

}


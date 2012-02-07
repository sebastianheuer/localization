<?php
namespace belanur\localization;

interface FactoryInterface
{
    /**
     * returns the country object for the two-digit ISO code in $type
     *
     * @abstract
     * @param string $type
     */
    public function getInstanceFor($type);
}
<?php
namespace belanur\localization;

interface FactoryInterface
{
    /**
     * @abstract
     * @param string $type
     */
    public function getInstanceFor($type);
}
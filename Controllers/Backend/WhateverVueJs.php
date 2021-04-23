<?php

use Shopware\Components\CSRFWhitelistAware;

/**
 * Class Shopware_Controllers_Backend_WhateverVueJs
 */
class Shopware_Controllers_Backend_WhateverVueJs extends Shopware_Controllers_Backend_ExtJs implements CSRFWhitelistAware
{
    /**
     * @return string[]
     */
    public function getWhitelistedCSRFActions(): array
    {
        return [
            'index'
        ];
    }
}
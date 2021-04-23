<?php
namespace VueJsBackendPlugin\Subscriber;

use Enlight\Event\SubscriberInterface;

class ControllerSubscriber implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @param string $pluginDirectory
     */
    public function __construct(string $pluginDirectory)
    {
        $this->pluginDirectory = $pluginDirectory;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'Shopware_Controllers_Backend_WhateverVueJs' => 'onGetManagerControllerPath',
        ];
    }

    /**
     * @return string
     */
    public function onGetManagerControllerPath(): string
    {
        return $this->pluginDirectory . '/Controllers/Backend/WhateverVueJs.php';
    }
}
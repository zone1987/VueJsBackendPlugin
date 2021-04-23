<?php
namespace VueJsBackendPlugin\Subscriber;

use Enlight\Event\SubscriberInterface;
use Enlight_Controller_ActionEventArgs;

class RouteSubscriber implements SubscriberInterface
{
    /**
     * @var string
     */
    private $pluginDirectory;

    /**
     * @var string $templatePath
     */
    private $templatePath;

    /**
     * RouteSubscriber constructor.
     * @param string $pluginDirectory
     * @param string $templatePath
     */
    public function __construct(string $pluginDirectory, string $templatePath)
    {
        $this->pluginDirectory = $pluginDirectory;
        $this->templatePath = $templatePath;
    }

    /**
     * @return array
     */
    public static function getSubscribedEvents(): array
    {
        return [
            'Enlight_Controller_Action_PostDispatch' => 'onPostDispatch',
        ];
    }

    /**
     * @param Enlight_Controller_ActionEventArgs $args
     */
    public function onPostDispatch(Enlight_Controller_ActionEventArgs $args)
    {
        $view = $args->getSubject()->View();
        $view->addTemplateDir($this->pluginDirectory . $this->templatePath);
    }
}
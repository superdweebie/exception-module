<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\ExceptionModule;

use Zend\Loader\AutoloaderFactory;
use Zend\Loader\StandardAutoloader;
use Zend\Mvc\MvcEvent;

/**
 *
 * @license MIT
 * @link    http://www.doctrine-project.org/
 * @since   0.1.0
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class Module
{
    /**
     *
     * @return array
     */
    public function getConfig(){
        return include __DIR__ . '/../../../config/module.config.php';
    }

    /**
     *
     * @param \Zend\EventManager\Event $event
     */
    public function onBootstrap(MvcEvent $event)
    {

        $application = $event->getTarget();
        $serviceManager = $application->getServiceManager();
        $application->getEventManager()->getSharedManager()->attach(
            'Zend\Mvc\Application',
            MvcEvent::EVENT_DISPATCH_ERROR,
            function($closureEvent) use ($serviceManager){
                $config = $serviceManager->get('Config');
                if ( ! $config['sds']['exception']['enableJsonExceptionStrategy']){
                    return;
                }
                $serviceManager->get('Sds\ExceptionModule\JsonExceptionStrategy')->prepareExceptionViewModel($closureEvent);
            },
            100
        );
    }
}
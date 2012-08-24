<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\ExceptionModule\Service;

use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;
use Sds\ExceptionModule\Controller\ExceptionLogController;

/**
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ExceptionLogControllerFactory implements FactoryInterface
{
    /**
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return \SdsAuthModule\Controller\AuthController
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $serviceLocator = $serviceLocator->getServiceLocator();

        $controller = new ExceptionLogController;

        $serializer = $serviceLocator->get('Config')['sds']['exception']['serializer'];
        if (is_string($serializer)) {
            $serializer = $serviceLocator->get($serializer);
        }
        $controller->setSerializer($serializer);

        return $controller;
    }
}

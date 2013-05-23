<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\ExceptionModule\Service;

use Sds\ExceptionModule\Controller\ExceptionDescriptionController;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class ExceptionDescriptionControllerFactory implements FactoryInterface
{

    /**
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return object
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        $controller = new ExceptionDescriptionController();

        if (isset($config['sds']['exception']['exception_map'])){
            $controller->setExceptionMap($config['sds']['exception']['exception_map']);
        }

        return $controller;
    }
}

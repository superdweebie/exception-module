<?php
/**
 * @package    Sds
 * @license    MIT
 */
namespace Sds\ExceptionModule\Service;

use Sds\ExceptionModule\JsonExceptionStrategy;
use Zend\ServiceManager\FactoryInterface;
use Zend\ServiceManager\ServiceLocatorInterface;

/**
 *
 * @since   1.0
 * @version $Revision$
 * @author  Tim Roediger <superdweebie@gmail.com>
 */
class JsonExceptionStrategyFactory implements FactoryInterface
{

    /**
     *
     * @param \Zend\ServiceManager\ServiceLocatorInterface $serviceLocator
     * @return object
     */
    public function createService(ServiceLocatorInterface $serviceLocator)
    {
        $config = $serviceLocator->get('Config');

        // Config json enabled exceptionStrategy
        $exceptionStrategy = new JsonExceptionStrategy();

        $displayExceptions = false;
        if (isset($config['view_manager']['display_exceptions'])) {
            $displayExceptions = $config['view_manager']['display_exceptions'];
        }
        $exceptionStrategy->setDisplayExceptions($displayExceptions);

        if (isset($config['sds']['exception']['describePath'])){
            $exceptionStrategy->setDescribePath($config['sds']['exception']['describePath']);
        }

        if (isset($config['sds']['exception']['exceptionMap'])){
            $exceptionStrategy->setExceptionMap($config['sds']['exception']['exceptionMap']);
        }

        return $exceptionStrategy;
    }
}

<?php
return array(
    'sds' => array(
        'exception' => array(

            //Used to serialize objects
            'serializer' => 'sds.doctrineExtensions.serializer',

        ),
    ),

    'router' => array(
        'routes' => array(
            'sds.exception' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/exception/log',
                    'defaults' => array(
                        'controller' => 'sds.exception.log',
                        'action' => 'log'
                    ),
                ),
            ),
        ),
    ),

    'controllers' => array(
        'factories' => array(
            'sds.exception.log' => 'Sds\ExceptionModule\Service\ExceptionLogControllerFactory'
        ),
    ),

    'view_manager' => array(
        'strategies' => array(
            'ViewJsonStrategy',
        ),
    ),

);

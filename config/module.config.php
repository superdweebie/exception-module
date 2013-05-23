<?php
return [
    'sds' => [
        'exception' => [
            'enable_json_exception_strategy' => true,
            'describe_path' => '/exception',
            'exception_map' => []
        ],
    ],

    'doctrine' => array(
        'driver' => array(
            'default' => array(
                'drivers' => array(
                    'Sds\ExceptionModule\DataModel' => 'doctrine.driver.exception'
                ),
            ),
            'exception' => array(
                'class' => 'Doctrine\ODM\MongoDB\Mapping\Driver\AnnotationDriver',
                'paths' => array(
                    __DIR__ . '/../src/Sds/ExceptionModule/DataModel'
                ),
            ),
        ),
    ),

    'router' => [
        'routes' => [
            'exception.descirption' => [
                //this route will return human readable informatino about exceptions
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/exception/:id',
                    'constraints' => [
                        'controller' => 'Sds\ExceptionModule\ExceptionDescriptionController',
                        'id'         => '[a-zA-Z][a-zA-Z0-9/_-]+',
                    ],
                    'defaults' => [
                        'extension'    => 'rest',
                        'manifestName' => 'default',
                    ]
                ],
            ],
        ]
    ],

    'controllers' => [
        'factory' => [
            'Sds\ExceptionModule\ExceptionDescriptionController' => 'Sds\ExceptionModule\Service\ExceptionDescriptionControllerFactory',
        ]
    ],

    'service_manager' => [
        'factories' => [
            'Sds\ExceptionModule\JsonExceptionStrategy' => 'Sds\ExceptionModule\Service\JsonExceptionStrategyFactory',
        ],
    ],

    'view_manager' => [
        'strategies' => [
            'ViewJsonStrategy',
        ],
    ],
];

<?php

return [
    'sds' => [
        'exception' => [
            'exceptionMap' => [
                'Sds\ExceptionModule\Test\Asset\MappedException' => [
                    'describedBy' => 'mapped-exception',
                    'title' => 'Mapped Exception',
                    'extensionFields' => ['publicInfo'],
                    'restrictedExtensionFields' => ['restrictedInfo']
                ]
            ]
        ]
    ],

    'controllers' => [
        'invokables' => [
            'testController' => 'Sds\ExceptionModule\Test\Asset\TestController'
        ]
    ],

    'router' => [
        'routes' => [
            'test_exception' => [
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => [
                    'route' => '/test_exception/:action',
                    'defaults' => [
                        'controller' => 'testController'
                    ],
                ],
            ],
        ],
    ],
];

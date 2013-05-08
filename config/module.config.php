<?php
return [
    'sds' => [
        'exception' => [
            'enableJsonExceptionStrategy' => true,
            'describePath' => '/exception',
            'exceptionMap' => []
        ],
    ],

    'controllers' => [
        'factories' => [
            'exception' => 'Sds\ExceptionModule\Service\ExceptionJsonRestfulControllerFactory',
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

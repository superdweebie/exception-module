<?php
return [
    'sds' => [
        'exception' => [
            'enableJsonExceptionStrategy' => true,
            'describePath' => '/exception',
            'exceptionMap' => []
        ],
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

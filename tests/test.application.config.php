<?php
return array(
    'modules' => array(
        'Sds\ExceptionModule'
    ),
    'module_listener_options' => array(
        'config_glob_paths'    => array(
            'vendor/superdweebie/exception-module/tests/test.module.config.php',
        ),
        'module_paths' => array(
            './vendor',
        ),
    ),
);

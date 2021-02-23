<?php

use App\Services\ClickhouseLogger;
use App\Services\Logger;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$logger = new Logger(new ClickhouseLogger());

try {
    throw new RuntimeException('test');
} catch (Exception $e) {
    $logger->saveException($e);
}

// Output
//
//

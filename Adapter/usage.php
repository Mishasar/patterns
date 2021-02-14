<?php

use App\Services\AnotherService;
use App\Services\OldLaravelContainerAdapter;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$container = new OldLaravelContainerAdapter();

/**
 * @var AnotherService $anotherService
 */
$anotherService = $container->get(AnotherService::class);
$anotherService->work();

// Output
//
// Work!!!

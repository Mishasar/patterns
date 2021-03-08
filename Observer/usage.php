<?php

use App\Services\LogService;
use App\Services\NotificatorService;
use App\Services\UserService;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$userService = new UserService();
$userService->attach(new NotificatorService());
$userService->attach(new LogService());

$userService->createUser('user@mail.com', 'Egor');

// Output
//
// Create new user - Egor user@mail.com
// Logger save new row in clickhouseLogger save new row in clickhouse

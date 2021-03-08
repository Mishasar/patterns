<?php

use App\Services\AnotherService;
use App\Services\LoginCheckerDecorator;
use App\Services\NotificationDecorator;
use App\Services\OldLaravelContainerAdapter;
use App\Services\PasswordHasherDecorator;
use App\Services\LogService;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

new NotificationDecorator(new PasswordHasherDecorator(new LoginCheckerDecorator(new LogService('test@test.com', 'qwerty'))));

// Output
//
// Work!!!

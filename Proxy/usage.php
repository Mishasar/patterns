<?php

use App\Services\PermissionChecker;
use App\Services\RedButtonProxy;
use App\Services\RedButtonService;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$redButton = new RedButtonService();
$redButtonWithCheck = new RedButtonProxy($redButton, new PermissionChecker());

$redButton->push();
$redButtonWithCheck->push();

// Output
//
// Boom
// Exception: Never do this!

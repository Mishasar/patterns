<?php

use App\Services\RoleService;
use App\Services\UserService;
use App\Services\Mediator;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$roleService = new RoleService();
$userService = new UserService();
$mediator = new Mediator($userService, $roleService);

$roleService->createRole();
$userService->createUser();


// Output
//
// Role is created.
// User is created.
// Please, set role to new user.

<?php

use App\Factories\CheckerFactory;
use App\Interfaces\IChecker;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});


$factory = new CheckerFactory();

/**
 * @param IChecker $factory
 * @param string $action
 */
function check(CheckerFactory $factory, string $action)
{
    if ($factory->getChecker($action)->check()) {
        echo "User can do it \n";
    } else {
        echo "User can not do it! \n";
    }
}

//------------------------------------------


check($factory, 'ADD_GOODS');
check($factory, 'ADD_LOTTERY');

// Output
//
// User can do it
// User can not do it!

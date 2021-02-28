<?php


use App\Checkers\GoodsChecker;
use App\Checkers\LotteryChecker;
use App\Interfaces\ICheckerHandler;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});


$checker = new GoodsChecker();
$checker->setNext(new LotteryChecker());

function check(ICheckerHandler $checker, string $action)
{
    if ($checker->handle($action)) {
        echo "User can do it \n";
    } else {
        echo "User can not do it! \n";
    }
}

//------------------------------------------


check($checker, 'ADD_GOODS');
check($checker, 'ADD_LOTTERY');
check($checker, 'ADD_COINS');

// Output
//
// User can do it
// User can not do it!
// User can do it

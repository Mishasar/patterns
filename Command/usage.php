<?php

use App\Commands\SwitchOffCommand;
use App\Commands\SwitchOnCommand;
use App\Services\Light;
use App\Services\Switcher;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

//-----------------------------------------------------------------

$luster = new Light();

$switchOnCommand = new SwitchOnCommand($luster);
$switchOffCommand = new SwitchOffCommand($luster);

$switcher = new Switcher();
$switcher->register('ON', $switchOnCommand);
$switcher->register('OFF', $switchOffCommand);

//-----------------------------------------------------------------

$switcher->execute('ON');
$switcher->execute('OFF');


// Output
//
// The light is on
// The light is off

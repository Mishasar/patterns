<?php

use App\Repositories\BarnaulRepository;
use App\Services\CelsiusThermometer;
use App\Services\FahrenheitThermometer;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$repository = new BarnaulRepository();
$celsiusThermometer = new CelsiusThermometer($repository);
$fahrenheitThermometer = new FahrenheitThermometer($repository);


echo $celsiusThermometer->format();
echo $fahrenheitThermometer->format();

// Output:
//
// Current temperature -25 °C.
// Current temperature -13 °F.

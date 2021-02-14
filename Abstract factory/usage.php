<?php

use App\Factories\LowAutoEquipment;
use App\Factories\TopAutoEquipment;
use App\Service\Formatter;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

/**
 * @param string $equipmentName
 * @return string
 */
function getTextForPublication(string $equipmentName): string
{
    $formatter = new Formatter();

    switch ($equipmentName) {
        case 'LOW':
            return $formatter->format(new LowAutoEquipment());
        case 'TOP':
            return $formatter->format(new TopAutoEquipment());
    }

    throw new RuntimeException('Unknown equipment name');
}

echo getTextForPublication('LOW');
echo getTextForPublication('TOP');

// Output:
//
// It has a 100 horsepower Mercedes G4LC engine and an Mercedes 6MKPP manual transmission.
// It has a 123 horsepower Mercedes G4FG engine and an Mercedes 6AKPP manual transmission.

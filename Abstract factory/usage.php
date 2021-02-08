<?php

use App\Factories\StandardAutoEquipment;
use App\Factories\AmgAutoEquipment;
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
        case 'STANDARD':
            return $formatter->format(new StandardAutoEquipment());
        case 'AMG':
            return $formatter->format(new AmgAutoEquipment());
    }

    throw new RuntimeException('Unknown equipment name');
}

echo getTextForPublication('STANDARD');
echo getTextForPublication('AMG');

// Output:
//
// It has a 100 horsepower Mercedes G4LC engine and an Mercedes 6MKPP manual transmission.
// It has a 123 horsepower Mercedes G4FG engine and an Mercedes 6AKPP manual transmission.

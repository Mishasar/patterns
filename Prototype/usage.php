<?php

use App\Interfaces\ICar;
use App\Models\VAZ2101;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

/**
 * @param ICar $car
 * @return string
 */
function showCarInformation(ICar $car): string
{
    return sprintf("Car %s %s . Vin: %s. \n",
        $car->getManufacturer(),
        $car->getModel(),
        $car->getVin()
    );
}

$car1 = new VAZ2101('VAZ 2101 0000001');

$car2 = clone $car1;
$car2->setVin('VAZ 2101 0000002');

$carWithoutVin = clone $car1;

echo showCarInformation($car1);
echo showCarInformation($car2);
echo showCarInformation($carWithoutVin);

// Output
// Car VAZ 2101 . Vin: VAZ 2101 0000001.
// Car VAZ 2101 . Vin: VAZ 2101 0000002.
// Car VAZ 2101 . Vin: .

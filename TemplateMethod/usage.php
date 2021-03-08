<?php

use App\Services\AmazonInformationService;
use App\Services\OzonInformationService;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});


echo "Get information about Lego from amazon: \n";
$amazonInformationService = new AmazonInformationService();
echo $amazonInformationService->getInformation('Lego');
echo "\n";

echo "Get information about Xiaomi mi15 lite pro from amazon: \n";
$ozonInformationService = new OzonInformationService();
echo $ozonInformationService->getInformation('Xiaomi mi15 lite pro');

// Output
//
// Get information about Lego from amazon:
// -----------------------------------------
// This product be called: Lego.
// Cost: 600
// -----------------------------------------
//
// Get information about Xiaomi mi15 lite pro from amazon:
// -----------------------------------------
// This product be called: Xiaomi mi15 lite pro.
// Cost: 967.7
// -----------------------------------------

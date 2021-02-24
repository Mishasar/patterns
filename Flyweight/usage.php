<?php


use App\Services\PageMaker;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$document = "AABBA";
$chars = str_split($document);

$size = new \App\Models\Size(10, 12);
$symbolFactory = new \App\Factories\SymbolFactory($size);

foreach ($chars as $key) {
    $symbol = $symbolFactory->getSymbol($key);
    $symbol->display();
}

// Output
//
// symbol: A. Size width: 10, height: 12
// symbol: A. Size width: 10, height: 12
// symbol: B. Size width: 10, height: 12
// symbol: B. Size width: 10, height: 12
// symbol: A. Size width: 10, height: 12


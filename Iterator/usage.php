<?php

use App\Collection\Collection;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});


$collection = new Collection();
$collection->addItem(1);
$collection->addItem(2);
$collection->addItem(3);

echo "Asc iterable:\n";
foreach ($collection->getIterator() as $item) {
    echo $item . "\n";
}

echo "\nDesc iterable:\n";
foreach ($collection->getReverseIterator() as $item) {
    echo $item . "\n";
}


// Output
//
// Role is created.
// User is created.
// Please, set role to new user.

<?php

use App\Services\StudentLifeSaver;
use App\Services\LifeStateStorage;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$lifeStateStorage = new LifeStateStorage();
$lifeStateStorage->upgradeState("born, ");
$lifeStateStorage->upgradeState("kindergarten, ");
$lifeStateStorage->upgradeState("school,");
$lifeStateStorage->upgradeState("student, ");

$studentLifeSaver = new StudentLifeSaver();
$studentLifeSaver->setMemento($lifeStateStorage->createMemento());

$lifeStateStorage->upgradeState("married, ");
$lifeStateStorage->upgradeState("work, ");
$lifeStateStorage->upgradeState("pension");

echo $lifeStateStorage->getState();
echo "\nlife is not end, restore your life!\n";

$lifeStateStorage->setMemento($studentLifeSaver->getMemento());

echo $lifeStateStorage->getState();


// Output
//
// born, kindergarten, school,student, married, work, pension
// life is not end, restore your life!
// born, kindergarten, school,student,

<?php

use App\Models\FamilyTree;
use App\Models\People;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$root = new FamilyTree("root");

$root->add(new People("Ivan A"));
$root->add(new People("Mary A"));

$comp = new FamilyTree("second");

$comp->add(new People("Mike R"));
$comp->add(new People("Juli R"));
$root->add($comp);
$root->add(new People("Andrew G"));

$leaf = new People("Test user");
$root->add($leaf);
$root->remove($leaf);

$root->view();

// Output
//
// ----Ivan A
// ----Mary A
// --------Mike R
// --------Juli R
// ----Andrew G

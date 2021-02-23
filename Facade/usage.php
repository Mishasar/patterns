<?php


use App\Services\PageMaker;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$pageMakerFacade = new PageMaker(new \App\Services\HeadMaker(), new \App\Services\BodyMaker());

echo $pageMakerFacade->makeHead();
echo $pageMakerFacade->makeBody();

// Output
//
// <head><title>Test</title></head><body><span>test</span></body>%

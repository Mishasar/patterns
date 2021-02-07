<?php

use App\Services\CacheDriver;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$cacheDriver = CacheDriver::getInstance();
$cacheDriver->setValue('LAST_BOOK_PAGE', '674');
/******************************************************/

$newCacheDriver = CacheDriver::getInstance();
echo $newCacheDriver->getValue('LAST_BOOK_PAGE');

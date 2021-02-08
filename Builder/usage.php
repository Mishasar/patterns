<?php

use App\Repositories\BarnaulRepository;
use App\Services\CelsiusThermometer;
use App\Services\FahrenheitThermometer;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});

$request = new \App\Models\Request('https://example.com/user');
$request->withMethod('POST');
$request->withHeader('Authorization', 'Bearer 12313123123');
$request->withBody(json_encode([
    'name' => 'saraykin',
    'password'=> 'IUg78huIhg7UIlgiu'
]));
$request->withProtocolVersion('1.0');

echo $request->getHTTPRequest();

// Output:
//
// POST /user HTTP/1.0
// Host: example.com
// Authorization:Bearer 12313123123
//
// {"name":"saraykin","password":"IUg78huIhg7UIlgiu"}

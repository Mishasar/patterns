<?php


use App\Models\GaseousState;
use App\Models\LiquidState;
use App\Models\Substance;

spl_autoload_register(static function (string $class) {
    include str_replace(array('\\', 'App/'), array(DIRECTORY_SEPARATOR, ''), $class) . '.php';
});


$context = new Substance(new GaseousState());
$context->freeze();
$context->freeze();
$context->freeze();
$context->heat();
$context->heat();
$context->heat();


// Output
//
// Transition to App\Models\GaseousState.
// Set liquid state
// Transition to App\Models\LiquidState.
// Set solid stateTransition to App\Models\SolidState.
// This is final state
// Set liquid state
// Transition to App\Models\LiquidState.
// Set gaseous state
// Transition to App\Models\GaseousState.
// This is final state

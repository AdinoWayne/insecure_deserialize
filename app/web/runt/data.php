<?php

require('vendor/autoload.php');

use UnserializeDemo\Weather;

// **never** deserialize an object with data from any place that the user can influence it
$data = $_GET['data'];

// we expect an object of the type `UnserializeDemo\Pickle" but do not whitelist
// $pickle = unserialize($data);
$pickle = unserialize($data, ['allowed_classes' => [\UnserializeDemo\Pickle::class]]);

$weather = new Weather();
echo "Hi, {$pickle->name}, the weather in London is " . filter_var($weather->weatherData, FILTER_SANITIZE_STRING) . PHP_EOL;
// echo "Hi, {$pickle->name}, the weather in London is " . $weather->weatherData . PHP_EOL;
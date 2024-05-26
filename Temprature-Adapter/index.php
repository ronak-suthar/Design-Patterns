<?php

use App\CelciusTempratureAdapter;
use App\SensorCelcius;
use App\SensorFahrenheit;

require_once './vendor/autoload.php';

$sensorCelcius = new SensorCelcius;

$sensorFahrenheit = new SensorFahrenheit;

echo "Sensor 1 Reading: " . $sensorCelcius->getTemprature() . " °C\n";

echo "Sensor 2 Reading: " . (new CelciusTempratureAdapter($sensorFahrenheit))->getTemprature() . " °C\n";
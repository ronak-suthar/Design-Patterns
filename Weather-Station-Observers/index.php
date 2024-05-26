<?php
require_once './vendor/autoload.php';


use App\HumDisplay;
use App\TempDisplay;
use App\WeatherStation;


$weatherStation = new WeatherStation();
$tempDisplay = new TempDisplay();
$humDisplay = new HumDisplay();
$weatherStation->addObserver($tempDisplay);
$weatherStation->addObserver($humDisplay);

$weatherStation->setTemperature(52.69);
$weatherStation->setHumidity(45.21);
$weatherStation->notifyObservers();

$weatherStation->removeObserver($humDisplay);

$weatherStation->setTemperature(53.69);
$weatherStation->setHumidity(44.21);
$weatherStation->notifyObservers();

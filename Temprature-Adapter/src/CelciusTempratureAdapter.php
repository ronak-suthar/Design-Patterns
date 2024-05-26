<?php

namespace App;

class CelciusTempratureAdapter implements CelciusTempratureInterface
{   
    private $sensor;

    public function __construct(SensorFahrenheit $sensor)
    {
        $this->sensor = $sensor;    
    }

    public function getTemprature() : float
    {
        return ($this->sensor->getTemprature() - 32) * 5 / 9;
    }
}
<?php

namespace App;

class SensorFahrenheit
{   
    /**
     * Get temprature reading in fahrenheit
     * 
     * @return float temprature reading in fahrenheit
     */
    public function getTemprature() : float
    {
        return rand(86,104);
    }
}
<?php

namespace App;

class SensorCelcius implements CelciusTempratureInterface
{   
    /**
     * Get temprature reading in degree celsius
     */
    public function getTemprature() : float
    {
        return rand(30, 40);
    }
}
<?php

namespace App;

interface CelciusTempratureInterface
{
    /**
     * Get temprature reading in degree celsius
     */
    public function getTemprature() : float;
}
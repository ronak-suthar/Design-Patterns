<?php

namespace App\Devices;

class Hottub
{

    public function jetsOn()
    {
        echo "Hottub on" . PHP_EOL;
    }

    public function jetsOff()
    {
        echo "Hottub off" . PHP_EOL;
    }

    public function circulate()
    {
        echo "Hottub circulate" . PHP_EOL;
    }

    public function setTemprature(float $temperature)
    {
        echo "Hottub temprature set to $temperature degree celsius" . PHP_EOL;
    }


}
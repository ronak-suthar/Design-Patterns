<?php

namespace App\Devices;

class CeilingFan
{

    public function high()
    {
        echo "Ceiling Fan is on high" . PHP_EOL;
    }

    public function medium()
    {
        echo "Ceiling Fan is on medium" . PHP_EOL;
    }

    public function low()
    {
        echo "Ceiling Fan is on low" . PHP_EOL;
    }

    public function stop()
    {
        echo "Ceiling Fan is off" . PHP_EOL;
    }

    public function start()
    {
        echo "Ceiling Fan is on" . PHP_EOL;
    }
}
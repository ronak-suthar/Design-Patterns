<?php

namespace App;

class SoundSystem
{
    public function on()
    {
        echo "Sound System is on.\n";
    }

    public function setVolume(int $level)
    {
        echo "Sound System volume set to " . $level . ".\n";
    }

    public function off()
    {
        echo "Sound System is off.\n";
    }
}

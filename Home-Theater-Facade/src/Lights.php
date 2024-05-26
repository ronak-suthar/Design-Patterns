<?php

namespace App;

class Lights
{
    public function dim(int $level)
    {
        echo "Lights dimmed to " . $level . "%.\n";
    }
}

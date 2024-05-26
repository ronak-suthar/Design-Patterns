<?php

namespace App\FlyBehaviour;

class FlyWithWings implements FlyBehaviourInterface
{
    public function fly(): void
    {
        echo "Fly with wings\n";
    }
}

<?php

namespace App\FlyBehaviour;

class NoFly implements FlyBehaviourInterface
{
    public function fly(): void
    {
        echo "CAnnot fly\n";
    }
}

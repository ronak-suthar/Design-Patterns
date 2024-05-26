<?php

namespace App;

class TeaBeverage extends AbstractCaffieneBeverage{

    public function brew(): void
    {
        echo "Steeping the tea\n";
    }

    public function addCondiments(): void
    {
        echo "Adding Lemon\n";
    }

    public function customerWantsCondiments(): bool
    {
        $response = readline("Would you like lemon with your tea (y/n)? : ");

        return str_starts_with($response, 'y');
    }
}
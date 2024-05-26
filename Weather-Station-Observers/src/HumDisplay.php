<?php

namespace App;

class HumDisplay implements ObserverInterface
{
    /**
     * @param WeatherStation $subject
     */
    public function update(SubjectInterface $subject): void
    {
        echo 'Humidity Display : ' . $subject->getHumidity();
    }

    public function getId(): int
    {
        return 2;
    }
}

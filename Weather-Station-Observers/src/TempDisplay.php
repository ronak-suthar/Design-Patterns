<?php

namespace App;

class TempDisplay implements ObserverInterface
{
    /**
     * @param WeatherStation $subject
     */
    public function update(SubjectInterface $subject): void
    {
        echo 'Temparture Display : ' . $subject->getTemperature();
    }

    public function getId(): int
    {
        return 1;
    }
}

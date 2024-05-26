<?php

namespace App;

class WeatherStation implements SubjectInterface
{
    /**
     * @var float
     */
    private $pressure;
   

    /**
     * @var float
     */
    private $temprature;

    /**
     * @var float
     */
    private $humidity;

    /**
     * @var ObseverInterface[]
     */
    private $observers;

    public function __construct()
    {
        $this->pressure = 0.00;
        $this->temprature = 0.00;
        $this->humidity = 0.00;
        $this->observers = [];
    }

    public function setPressure(float $pressure): void
    {
        $this->pressure = $pressure;
    }

    public function setTemperature(float $temperature): void
    {
        $this->temprature = $temperature;
    }

    public function setHumidity(float $humidity): void
    {
        $this->humidity = $humidity;
    }

    public function getPressure(): float
    {
        return $this->pressure;
    }

    public function getTemperature(): float
    {
        return $this->temprature;
    }

    public function getHumidity(): float
    {
        return $this->humidity;
    }

    public function addObserver(ObserverInterface $observer): void
    {
        $this->observers[$observer->getId()] = $observer;
    }

    public function removeObserver(ObserverInterface $observer): void
    {
        if (isset($this->observers[$observer->getId()])) {
            unset($this->observers[$observer->getId()]);
        }
    }

    public function notifyObservers(): void
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}



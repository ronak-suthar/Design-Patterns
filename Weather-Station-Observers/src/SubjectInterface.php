<?php

namespace App;

interface SubjectInterface
{
    public function addObserver(ObserverInterface $observer): void;
    public function removeObserver(ObserverInterface $observer): void;
    public function notifyObservers(): void;
}

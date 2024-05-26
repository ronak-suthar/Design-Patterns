<?php

use App\DVDPlayer;
use App\HomeTheaterFacade;
use App\Lights;
use App\Projector;
use App\SoundSystem;

require_once './vendor/autoload.php';


$dvdPlayer = new DVDPlayer();
$projector = new Projector();
$lights = new Lights();
$soundSystem = new SoundSystem();

$homeTheater = new HomeTheaterFacade($dvdPlayer, $projector, $lights, $soundSystem);

$homeTheater->watchMovie("Inception");
$homeTheater->endMovie();



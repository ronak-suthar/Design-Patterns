<?php

require_once './vendor/autoload.php';

use App\Document;
use App\DocumentProxy;
use App\User;

$document = new Document(
    "test.txt",
    "Hello World from Ronak",
    "World is awesome",
    "Ronak",
    "10-10-2020"
);

$loggedInUser = new User(
    "Rajesh",
    "Kumar",
    "kXUcO@example.com",
    "Developer",
    User::LEVEL_ONE
);

$documentProxy = new DocumentProxy($document, $loggedInUser);

echo $documentProxy->getTitle();
echo PHP_EOL;

try {
    echo $documentProxy->getSummary();
} catch (\Exception $th) {
    echo $th->getMessage();
}

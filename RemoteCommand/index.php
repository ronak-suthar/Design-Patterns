<?php

use App\RemoteLoaderClient;

require_once './vendor/autoload.php';

$remoteLoader = new RemoteLoaderClient;

$remoteLoader->run();


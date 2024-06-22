<?php

require_once './vendor/autoload.php';

$csvIterator = new \App\CsvIterator('./data.csv');

foreach ($csvIterator as $row) {
    print_r($row);
}
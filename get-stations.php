#!/usr/bin/php
<?php

require_once(__DIR__ . '/constants.php');

echo 'Start script ...' . PHP_EOL . PHP_EOL;
$url = YOU_BIKE_URL;

echo 'Getting data from \'http://data.ntpc.gov.tw/\' ...' . PHP_EOL . PHP_EOL;
$content = file_get_contents($url);

$data = json_decode($content, true);
$result = [];
foreach ($data as $station) {
    unset($station['sbi']);
    unset($station['bemp']);
    $result[] = $station;
}

$file_path = '/data/stations.json';

echo 'Writing data to \'' . $file_path . '\' ...' . PHP_EOL . PHP_EOL;
file_put_contents(__DIR__ . $file_path, json_encode($result));

echo 'Complete Successfully!' . PHP_EOL;
exit();

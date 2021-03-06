#!/usr/bin/php
<?php

require_once(__DIR__ . '/constants.php');

date_default_timezone_set('Asia/Taipei');

echo 'Start script ...' . PHP_EOL . PHP_EOL;
$url = YOU_BIKE_URL;

echo 'Getting data from \'http://data.ntpc.gov.tw/\' ...' . PHP_EOL . PHP_EOL;
$content = file_get_contents($url);

$data = json_decode($content, true);
$result = [];
foreach ($data as $status) {
    $result[] = [
        'sno' => $status['sno'],
        'sbi' => $status['sbi'],
        'bemp' => $status['bemp'],
    ];
}

$file_path = '/data/status/' . date('YmdHis') . '.json';

echo 'Writing data to \'' . $file_path . '\' ...' . PHP_EOL . PHP_EOL;
file_put_contents(__DIR__ . $file_path, json_encode($result));

echo 'Complete Successfully!' . PHP_EOL;
exit();

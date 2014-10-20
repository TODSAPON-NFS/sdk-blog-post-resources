<?php

require(__DIR__ . '/autoload.php');
$config = require('./config.php');

$client = new \ChartBlocks\Client($config['client']);
$dataSet = $client->dataSet->create(array('name' => 'Temperature log'));

$dataSet->getData()->append(array(
    array('Time', 'Temperature')
));

echo 'Created dataset ID: ' . $dataSet->id . PHP_EOL;

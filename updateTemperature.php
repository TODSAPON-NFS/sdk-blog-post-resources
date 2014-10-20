<?php

require(__DIR__ . '/autoload.php');
$config = require('./config.php');

$dataSetId = $config['dataSetId'];

if (null === $dataSetId) {
    echo 'Please update config.php with your dataSetId' . PHP_EOL;
    exit(1);
}

$rawTemperature = exec('usbtemp', $output, $return);
if (0 !== $return) {
    echo 'Unable to get temperature from probe, using fake temperature' . PHP_EOL;
    $rawTemperature = rand(15, 25) . '.' . rand(0, 9) . 'C';
}

$timestamp = time();
$temperature = (float) $rawTemperature;

echo 'Raw temperature: ' . $rawTemperature . PHP_EOL;
echo 'Temperature: ' . $temperature . PHP_EOL;

$client = new \ChartBlocks\Client($config['client']);
$dataSet = $client->dataSet->findById($dataSetId);

$dataSet->getData()->append(array(
    array(date('c', $timestamp), $temperature)
));

echo 'Data set updated!' . PHP_EOL;

<?php

chdir(__DIR__);

if (file_exists('./vendor/autoload.php')) {
    require './vendor/autoload.php';
} else {
    echo 'Could not find vendor/autoload.php, did you run composer install?' . PHP_EOL;
    exit(1);
}


<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require 'beverage.php';
require 'beer.php';

$mojito = new Beverage('Mojito', ['green', 10 . ' €' , 'brainfreeze warning']);
$beer = new Beverage('Beer', ['blonde', 5.2 . ' ° Alc.', 'extra zimny']);

//$mojito -> getInfo();
//$beer -> getInfo();
?>
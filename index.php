<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "exercise_1_classes.php";
require "exercise_2_extending.php";

$cola = new Beverages("black", 2);
$cola->getInfo();
$cola->temperature;

$duvel = new Beer("blonde", 3.5, "ice cold", "Duvel", 8.5);
$duvel->getAlcoholPercent();
echo "{$duvel->getAlcoholpercent()}";
$duvel->getInfo();
$duvel->color;

?>
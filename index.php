<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

require "exercise_1_classes.php";
require "exercise_2_extending.php";
require "exercise_3_private.php";
echo "exercise 1 <br>";
$cola = new Beverages("black", 2);
$cola->getInfo();
$cola->temperature;
echo "exercise 2 <br>";
$duvel = new Beer("blonde", 3.5, "ice cold", "Duvel", 8.5);
$duvel->getAlcoholPercent();
echo "{$duvel->getAlcoholpercent()}";
$duvel->getInfo();
$duvel->color;
echo "exercise 3 <br>";
$duvel = new StrongBeer("blonde", 3.5, "ice cold", "Duvel", 8.5);
$duvel->getAlcoholPercent();
$duvel->getName();
$duvel->setColor("light");
$duvel->getBeerInfo($duvel);
?>
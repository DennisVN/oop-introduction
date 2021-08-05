<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beverages
{
    public string $color;
    public float $price;
    public string $temperature;

    public function __construct(string $color, float $price, string $temperature = "cold")
    {
        $this->temperature = $temperature;
        $this->price = $price;
        $this->color = $color;
    }
    public function getInfo()
    {
        echo "Your drink is served {$this->temperature} and {$this->color}<br>";
    }
}
?>

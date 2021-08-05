<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beer extends Beverages
{
    public string $name;
    public float $alcohol;

    public function __construct(string $color, float $price, string $temperature,  string $name,  float $alcohol)
    {
        parent::__construct($color, $price, $temperature);
        $this->name = $name;
        $this->alcohol = $alcohol;
    }
    public function getAlcoholPercent()
    {
        echo "{$this->alcohol}<br>";
    }
}
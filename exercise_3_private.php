<?php
declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class StrongBeer extends Beverages
{
    private string $name;
    private float $alcohol;

    public function __construct(string $color, float $price, string $temperature,  string $name,  float $alcohol)
    {
        parent::__construct($color, $price, $temperature = "cold");
        $this->name = $name;
        $this->alcohol = $alcohol;
    }
    public function getAlcoholPercent()
    {
        echo "Alcohol percentage : {$this->alcohol}%<br>";
    }
    public function getName()
    {
        echo "Name: {$this->name} <br>";
    }
    public function setColor($color)
    {
        $this->color = $color;
        echo "Color : {$this->color}<br>";
    }
    private function beerInfo()
    {
        echo "Hi i'm {$this->name} and am {$this->alcohol} strong which is pretty nice for a {$this->color} beer.";
    }
    public function getBeerInfo()
    {
        return $this->beerInfo();
    }
}
?>
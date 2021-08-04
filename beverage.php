<?php
class Beverage
{
    public string $color;
    //public float $price;
    public string $temperature;
    public array $info;

    public function __construct(string $color, array $info)
    {
        $this->color = $color;
        //$this->price = $price;
        //$this->temperature = $temperature;
        $this->info= $info;
    }

    public function getInfo()
    {
        $infoAsString = implode(', ', $this->info);
        echo "Your mojito is {$infoAsString} ";
    }

    /*public function showColor()
    {
        echo "Your mojito has a {$this->color} color <br>";
    }*/

    //public function 
}

class Beer extends Beverage {
    
}

?>
<?php

declare(strict_types=1);

ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

class Beer extends Beverage
{
    public string $name;
    public string $alcohol;

    public function __construct(string $name, string $color, string $price, string $temperature, string $alcohol)
    {
        $this->name = $name;
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
        $this->alcohol = $alcohol; 
    }
    public function getInfo()
    {
        return $this->name;
        return $this->color;
        return $this->price;
        return $this->temperature;
        return $this->alcohol;
    }
    
}
$beer = new Beverage( "beer", "blonde", "2 euro", "cold", "5.2 degrees");
echo "<br> Name of beverage : ";
echo $beer->name;
echo ". This beverage is ";
echo $beer->color;
echo ", and costs ";
echo $beer->price;
echo ". best served ";
echo $beer->temperature; 
echo ". Alcohol percentage is ";
echo $beer->alcohol;
?>
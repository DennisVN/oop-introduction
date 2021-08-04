<?php
class Beverage
{
    public string $color;
    public string $price;
    public string $temperature;

    public function __construct(string $color, string $price, string $temperature)
    {
        $this->color = $color;
        $this->price = $price;
        $this->temperature = $temperature;
    }

    public function getInfo()
    {
        return $this->color;
        return $this->price;
        return $this->temperature;
    }
}

$cola = new beverage("black", "1 euro", "very cool");
echo "this beverage is ";
echo $cola->color;
echo " and costs ";
echo $cola->price;
echo " best served ";
echo $cola->temperature; 


?>
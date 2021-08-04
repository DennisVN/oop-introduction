<?php
class Beverage
{
    public string $name;
    public string $color;
    public string $price;
    public string $temperature;
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

$cola = new Beverage( "cola", "black", "2 euro", "cold", "0");
echo "Name of beverage : ";
echo $cola->name;
echo ". This beverage is ";
echo $cola->color;
echo ", and costs ";
echo $cola->price;
echo ". best served ";
echo $cola->temperature; 

//$beer = new Beverage("")

?>
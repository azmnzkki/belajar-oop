<?php

class Vehicle
{
    protected $type;
    protected $brand;

    protected function __construct($type, $brand)
    {
        $this->type = $type;
        $this->brand = $brand;
    }

    protected function move()
    {
        $str = "The vehicle " . $this->type . " Is Moving From Brand " . $this->brand;
        return $str;
    }
}


class Bike extends Vehicle
{
    public $gearCount;

    public function __construct($type, $brand, $gearCount)
    {
        parent::__construct($type, $brand);
        $this->gearCount = $gearCount;
    }

    public function move()
    {
        $str = "The Bike " . $this->type . " Is Moving From Brand " . $this->brand . " With Gear " . $this->gearCount;
        return $str;
    }
}

class Truck extends Vehicle
{
    public $carryingItems;

    public function __construct($type, $brand, $carryingItems)
    {
        parent::__construct($type, $brand);
        $this->carryingItems = $carryingItems;
    }

    public function move()
    {
        $str = "The Truck " . $this->type . " Is Moving From Brand" . $this->brand . "With Carrying" . $this->carryingItems;
        return $str;
    }
}
// $car = new Vehicle("Supra", "Toyota");
$bike = new Bike("Zx25R", "Kawasaki", 6);
$truck = new Truck("Oleng", "Hino", "Tractor");
// echo $car->move();
echo "</br>";
echo $bike->move();
echo "</br>";
echo $truck->move();

// Vehicle*  
// - Parent class: Vehicle  
// - Properties: type (public), brand (protected)  
// - Methods: 
//   - __construct($type, $brand)
//   - move() returns "The vehicle is moving"
// - Child class: Bike  
// - Properties: gearCount (public)  
// - Methods: 
//   - __construct($type, $brand, $gearCount)  
//   - move() overrides to return "The bike is moving with [gearCount] gears"

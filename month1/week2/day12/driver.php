<?php

class Driver
{
    protected $vehicle;
    public function __construct(Vehicle $vehicle)
    {
        $this->vehicle = $vehicle;
    }
    public function vehicleStart(){
        $this->vehicle->start();
    }
}

interface Vehicle{
    public function start();
}

class Bike implements Vehicle
{
    public function start(){
        echo "Bike Started.";
    }
}

class Car implements Vehicle
{
    public function start(){
        echo "Car Started.";
    }
}

class Truck implements Vehicle{
    public function start(){
        echo "Truck Started.";
    }
}

$bike = new Bike();
$car = new Car();
$truck = new Truck();
$driver = new Driver($truck);
$driver->vehicleStart();
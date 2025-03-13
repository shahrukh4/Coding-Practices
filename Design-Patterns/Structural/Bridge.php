<?php

// Parent class
abstract class Vehicle {
    protected $engine;

    public function __construct(Engine $engine) {
        $this->engine = $engine;
    }

    abstract public function drive();
}

// Concrete classes
class Car extends Vehicle {
    public function drive() {
        echo "Car is running on a " . $this->engine->getType() . " engine.\n";
    }
}

class Bike extends Vehicle {
    public function drive() {
        echo "Bike is running on a " . $this->engine->getType() . " engine.\n";
    }
}

// Parent class
abstract class Engine {
    abstract public function getType();
}

// Concrete classes
class PetrolEngine extends Engine {
    public function getType() {
        return "Petrol";
    }
}

class DieselEngine extends Engine {
    public function getType() {
        return "Diesel";
    }
}

// Usage
$petrolEngine = new PetrolEngine();
$dieselEngine = new DieselEngine();

$car = new Car($petrolEngine);
$car->drive();

$bike = new Bike($dieselEngine);
$bike->drive();

// Outputs:
// Car is running on a Petrol engine.
// Bike is running on a Diesel engine.

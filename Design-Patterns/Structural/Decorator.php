<?php

interface Flight {
    public function book();
}

class StandardFlight implements Flight {
    public function book() {
        echo "Booking a standard flight.\n";
    }
}

class FlightDecorator implements Flight {
    protected $flight;

    public function __construct(Flight $flight) {
        $this->flight = $flight;
    }

    public function book() {
        $this->flight->book();
    }
}

class ExtraLegroom extends FlightDecorator {
    public function book() {
        parent::book();
        echo "Adding extra legroom.\n";
    }
}

class Meal extends FlightDecorator {
    public function book() {
        parent::book();
        echo "Adding meal.\n";
    }
}

$flight = new StandardFlight();
$flight->book();

echo "\n";

$flight = new ExtraLegroom($flight);
$flight->book();

echo "\n";

$flight = new Meal($flight);
$flight->book();

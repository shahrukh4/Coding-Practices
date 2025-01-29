<?php

/**
 * Here we don't have use the seprate servives from a Hotel directly, instead we can just utilize the Hotel class
 * and use it's services through it.
 */
class Hotel {
    private $roomService;
    private $foodService;
    private $laundryService;

    public function __construct() {
        $this->roomService = new RoomService();
        $this->foodService = new FoodService();
        $this->laundryService = new LaundryService();
    }

    public function getRoom($roomNumber) {
        return $this->roomService->getRoom($roomNumber);
    }

    public function getFood($foodType) {
        return $this->foodService->getFood($foodType);
    }

    public function doLaundry($clothes) {
        return $this->laundryService->doLaundry($clothes);
    }
}

class RoomService {
    public function getRoom($roomNumber) {
        return "Room Number: " . $roomNumber;
    }
}

class FoodService {
    public function getFood($foodType) {
        return "Food Type: " . $foodType;
    }
}

class LaundryService {
    public function doLaundry($clothes) {
        return "Laundry Done for: " . $clothes;
    }
}

$hotel = new Hotel();
echo $hotel->getRoom(101) . "\n";
echo $hotel->getFood("Veg") . "\n";
echo $hotel->doLaundry("Shirt") . "\n";

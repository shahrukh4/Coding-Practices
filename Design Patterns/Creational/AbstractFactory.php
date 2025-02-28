<?php

class VegFood {
    public function __construct() {
        echo 'Veg food object created.' . PHP_EOL;
    }
}

class NonVegFood {
    public function __construct() {
        echo 'Non veg food object created.' . PHP_EOL;
    }
}

interface FoodFactory {
    public static function getFood();
}

class VegFoodFactory implements FoodFactory {
    public static function getFood() {
        return new VegFood();
    }
}

class NonVegFoodFactory implements FoodFactory {
    public static function getFood() {
        return new NonVegFood();
    }
}

$vegFood = VegFoodFactory::getFood();
$nonVegFood = NonVegFoodFactory::getFood();


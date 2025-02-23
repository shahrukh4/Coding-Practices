<?php

// Example of Composite design pattern

// Component
abstract class Order
{
    abstract public function getPrice();
}

// Leaf
class Product extends Order
{
    private $price;

    public function __construct($price)
    {
        $this->price = $price;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

// Composite
class Box extends Order
{
    private Product $products = [];

    public function add(Order $product)
    {
        $this->products[] = $product;
    }

    public function getPrice()
    {
        $price = 0;
        foreach ($this->products as $product) {
            $price += $product->getPrice();
        }

        return $price;
    }
}

// Usage
$mainBox = new Box();

$box1 = new Box();
$box1->add(new Product(10));
$box1->add(new Product(15));

$mainBox->add($box1);
$mainBox->add(new Product(20));

echo $mainBox->getPrice(); // Outputs: 45

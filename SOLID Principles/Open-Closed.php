<?php

// Open-Closed Principle Example

interface Shape
{
    public function area();
}

class Rectangle implements Shape
{
    private $width;
    private $height;

    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height = $height;
    }

    public function area()
    {
        return $this->width * $this->height;
    }
}

class Circle implements Shape
{
    private $radius;

    public function __construct($radius)
    {
        $this->radius = $radius;
    }

    public function area()
    {
        return pi() * ($this->radius ** 2);
    }
}

function calculateArea(Shape $shape)
{
    return $shape->area();
}

// Example usage
$rectangle = new Rectangle(5, 10);
$circle = new Circle(7);

echo "Rectangle area: " . calculateArea($rectangle) . "\n";
echo "Circle area: " . calculateArea($circle) . "\n";

<?php

// This file demonstrates the Liskov Substitution Principle.
// It ensures that objects of a Base class can be replaced with objects of a Child class 
// without affecting the correctness of the program.

interface Human
{
    public function speak();
}

class Father implements Human
{
    public function speak()
    {
        return "Father speaking";
    }
}

class Child implements Human
{
    public function speak()
    {
        return "Child speaking";
    }
}

function letBirdFly(Human $human)
{
    return $human->speak();
}

$father = new Father();
$child = new Child();

echo letBirdFly($father); // Output: Father speaking
echo letBirdFly($child); // Output: Child speaking
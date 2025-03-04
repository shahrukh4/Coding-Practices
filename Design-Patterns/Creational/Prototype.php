<?php

interface Prototype {
    public function clone(): Prototype;
}

class PrototypeClass implements Prototype {
    private $name;

    public function __construct($name) {
        $this->name = $name;
    }

    public function clone(): Prototype {
        return new PrototypeClass($this->name);
    }

    public function getName() {
        return $this->name;
    }
}

$prototype = new PrototypeClass("Original");
$cloneOne = $prototype->clone();
$cloneTwo = $prototype->clone();

echo $cloneOne->getName(); // Output: Original
echo $cloneTwo->getName(); // Output: Original
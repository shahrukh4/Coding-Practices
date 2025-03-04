<?php

// Visitor Pattern Example

// Element
interface ComputerConfig
{
    public function accept(ComputerConfigVisitor $visitor);
}

// Concrete Element
class Macbook implements ComputerConfig
{
    private $price = 1000;

    public function accept(ComputerConfigVisitor $visitor)
    {
        $visitor->visitMacbook($this);
    }

    public function setPrice($price)
    {
        $this->price += $price;
        return $this;
    }

    public function getPrice()
    {
        return $this->price;
    }
}

// Visitor
interface ComputerConfigVisitor
{
    public function visitMacbook(Macbook $macbook);
}

// Concrete Visitor
class RAMConfigurator implements ComputerConfigVisitor
{
    public function visitMacbook(Macbook $macbook)
    {
        $macbook->setPrice(100);
    }
}

class StorageConfigurator implements ComputerConfigVisitor
{
    public function visitMacbook(Macbook $macbook)
    {
        $macbook->setPrice(200);
    }
}

// Client
$macbook = new Macbook();
$ramConfigurator = new RAMConfigurator();
$storageConfigurator = new StorageConfigurator();

$macbook->accept($ramConfigurator);
$macbook->accept($storageConfigurator);

echo $macbook->getPrice(); // Output: 1300

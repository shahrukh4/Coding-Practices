<?php

// Mediator pattern example

interface Device
{
    public function turnOn();
    public function turnOff();
}

class TV implements Device
{
    public function turnOn()
    {
        echo "TV is turned on.\n";
    }

    public function turnOff()
    {
        echo "TV is turned off.\n";
    }
}

class Camera implements Device
{
    public function turnOn()
    {
        echo "Camera is turned on.\n";
    }

    public function turnOff()
    {
        echo "Camera is turned off.\n";
    }
}

class CentralApp
{
    private $device;

    public function __construct(Device $device)
    {
        $this->device = $device;
    }

    public function turnOn()
    {
        $this->device->turnOn();
    }

    public function turnOff()
    {
        $this->device->turnOff();
    }
}

$centralAppForTv = new CentralApp(new TV());
$centralAppForCamera = new CentralApp(new Camera());

$centralAppForTv->turnOn();
$centralAppForCamera->turnOn();

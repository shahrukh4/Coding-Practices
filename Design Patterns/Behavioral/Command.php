<?php

// Command Pattern Example

// Receiver
class Light
{
    public function on()
    {
        echo "Light is on\n";
    }

    public function off()
    {
        echo "Light is off\n";
    }
}

// Command
interface ICommand
{
    public function execute();
}

// Concrete Command
class TurnOnCommand implements ICommand
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->on();
    }
}

class TurnOffCommand implements ICommand
{
    private $light;

    public function __construct(Light $light)
    {
        $this->light = $light;
    }

    public function execute()
    {
        $this->light->off();
    }
}

// Invoker
class RemoteControl
{
    private $command;

    public function setCommand(ICommand $command)
    {
        $this->command = $command;
    }

    public function pressButton()
    {
        $this->command->execute();
    }
}

// Client
$light = new Light();
$remote = new RemoteControl();

$remote->setCommand(new TurnOnCommand($light));
$remote->pressButton();

$remote->setCommand(new TurnOffCommand($light));
$remote->pressButton();

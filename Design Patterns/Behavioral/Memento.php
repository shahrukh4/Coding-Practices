<?php

class Memento {
    private $state;

    public function __construct($state) {
        $this->state = $state;
    }

    public function getState() {
        return $this->state;
    }
}

class Originator {
    private $state;

    public function __construct($state) {
        $this->state = $state;  
    }

    public function createMemento() {
        return new Memento($this->state);
    }

    public function restore(Memento $memento) {
        $this->state = $memento->getState();
    }

    public function getState() {
        return $this->state;
    }
}

class Caretaker {
    public $mementos = [];

    public function save(Originator $originator) {
        $this->mementos[] = $originator->createMemento();
    }

    public function restore(Originator $originator, $index) {
        if (isset($this->mementos[$index])) {
            $originator->restore($this->mementos[$index]);
        }
    }
}

// Usage
$originator = new Originator("State 1");
$caretaker = new Caretaker();

$caretaker->save($originator); // Save current state

$originator->restore($caretaker->mementos[0]); // Restore to saved state
echo $originator->getState(); // Outputs: State 1
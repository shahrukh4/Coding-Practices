<?php

/** It can also be the example of Open-Closed Principle */
interface State {
    public function doAction(Context $context);
}

class StateA implements State {
    public function doAction(Context $context) {
        echo "State A<br>";
        $context->setState(new StateB());
    }
}

class StateB implements State {
    public function doAction(Context $context) {
        echo "State B<br>";
        $context->setState(new StateA());
    }
}

class Context {
    private $state;

    public function __construct(State $state) {
        $this->state = $state;
    }

    public function setState(State $state) {
        $this->state = $state;
    }

    public function doAction() {
        $this->state->doAction($this);
    }
}

$context = new Context(new StateA());
$context->doAction();
$context->doAction();
$context->doAction();

<?php

// Flyweight Pattern Example

// Intrinsic State
class User {
    public $name;

    public function __construct($name) {
        $this->name = $name;
    }
}

// Flyweight
class UserFlyweight {
    private $extrinsicState = [];

    public function addState(User $user, $key, $value) {
        $this->extrinsicState[$key][$user->name] = $value;
    }

    public function getState(User $user, $key) {
        return $this->extrinsicState[$key][$user->name];
    }
}

// Client
$user1 = new User("John");
$user2 = new User("Jane");

$userFlyweight = new UserFlyweight();

$userFlyweight->addState($user1, 'email', 'john@example.com');
$userFlyweight->addState($user2, 'email', 'jane@example.com');

echo $userFlyweight->getState($user1, 'email'); // Output: john@example.com
echo $userFlyweight->getState($user2, 'email'); // Output: jane@example.com

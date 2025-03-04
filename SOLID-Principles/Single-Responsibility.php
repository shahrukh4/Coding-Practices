<?php

class User {
    private $name;
    private $email;

    public function __construct($name, $email) {
        $this->name = $name;
        $this->email = $email;
    }

    public function getName() {
        return $this->name;
    }

    public function getEmail() {
        return $this->email;
    }
}

class UserRepository {
    public function save(User $user) {
        // Code to save user to a database
    }

    public function find($email) {
        // Code to find a user by email
    }
}

class UserNotifier {
    public function notify(User $user) {
        // Code to send notification to the user
    }
}
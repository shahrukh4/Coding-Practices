<?php

// Template Method Pattern Example

abstract class SocialNetwork
{
    public function publish(string $message)
    {
        $this->login();
        $this->sendMessage($message);
        $this->logout();
    }

    protected abstract function login();
    protected abstract function sendMessage(string $message);
    protected abstract function logout();
}

class Facebook extends SocialNetwork
{
    protected function login()
    {
        echo "Facebook login\n";
    }

    protected function sendMessage(string $message)
    {
        echo "Facebook: $message\n";
    }

    protected function logout()
    {
        echo "Facebook logout\n";
    }
}

class Twitter extends SocialNetwork
{
    protected function login()
    {
        echo "Twitter login\n";
    }

    protected function sendMessage(string $message)
    {
        echo "Twitter: $message\n";
    }

    protected function logout()
    {
        echo "Twitter logout\n";
    }
}

$facebook = new Facebook();
$twitter = new Twitter();

$facebook->publish('Hello from Facebook!');
$twitter->publish('Hello from Twitter!');

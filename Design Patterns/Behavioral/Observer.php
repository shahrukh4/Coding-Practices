<?php

// Observer
interface Subject {
    public function subscribe(Observer $user);
    public function unsubscribe(Observer $user);
    public function notify();
}

// Concrete Subject
class Amazon implements Subject {
    private $subscribers = [];

    public function subscribe(Observer $user) {
        array_push($this->subscribers, $user);
    }

    public function unsubscribe(Observer $user) {
        $this->subscribers = array_filter($this->subscribers, function ($o) use ($user) {
            return !($o === $user);
        });
    }

    public function notify() {
        foreach ($this->subscribers as $subscriber) {
            $subscriber->update($this);
        }
    }
}

// Observer
interface Observer {
    public function update(Subject $store);
}

// Concrete Observer
class IPhoneSubscriber implements Observer {
    public function __construct(private $name) {}

    public function update(Subject $store) {
        echo "Hello {{$this->name}}, Yay! Iphone is available to buy.";
    }
}

// Client
$amazon = new Amazon();
$subscriber1 = new IPhoneSubscriber('John');
$subscriber2 = new IPhoneSubscriber('Jane');

$amazon->subscribe($subscriber1);
$amazon->subscribe($subscriber2);
$amazon->notify();

$amazon->unsubscribe($subscriber2);
$amazon->notify();
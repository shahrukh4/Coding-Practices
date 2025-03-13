<?php

// Abstraction
interface Notification {
    public function send(string $message): void;
}

// Adapter
class EmailNotification implements Notification {
    private $email;

    public function __construct(Email $email) {
        $this->email = $email;
    }

    public function send(string $message): void {
        $this->email->setReceiver("admin@example.com");
        $this->email->setMessage($message);
        $this->email->send();
    }
}

class SlackNotification implements Notification {
    private $slack;

    public function __construct(Slack $slack) {
        $this->slack = $slack;
    }

    public function send(string $message): void {
        $this->slack->url = "YOUR_SALCK_WEBHOOK_URL";
        $this->slack->channel = "#my_channel";
        $this->slack->message = $message;
        $this->slack->send();
    }
}

// Client
class NotificationSender {
    private $notification;

    public function __construct(Notification $notification) {
        $this->notification = $notification;
    }

    public function send(string $message): void {
        $this->notification->send($message);
    }
}

// Usage
$sender = new NotificationSender(new EmailNotification(new Email()));
$sender->send("Hello, check this out, it's pretty cool.");
$sender = new NotificationSender(new SlackNotification(new Slack()));
$sender->send("Hello, check this out, it's pretty cool.");
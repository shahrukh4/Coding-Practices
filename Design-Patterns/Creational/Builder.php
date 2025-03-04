
<?php

class Email {
    private $to;
    private $subject;
    private $cc;
    private $bcc;

    public function __construct(EmailBuilder $emailBuilder) {
        $this->to = $emailBuilder->to;
        $this->subject = $emailBuilder->subject;
        $this->cc = $emailBuilder->cc;
        $this->bcc = $emailBuilder->bcc;
    }

    public function setTo($to) {
        $this->to = $to;
    }

    public function setSubject($subject) {
        $this->subject = $subject;
    }

    public function setCC($cc) {
        $this->cc = $cc;
    }

    public function setBCC($bcc) {
        $this->bcc = $bcc;
    }

    public function __toString() {
        $message = "To: {$this->to}\r\n";

        if ($this->cc) {
            $message .= "CC: {$this->cc}\r\n";
        }
        if ($this->bcc) {
            $message .= "BCC: {$this->bcc}\r\n";
        }

        $message .= "Subject: {$this->subject}\r\n\r\n";

        return $message;
    }
}

class EmailBuilder {
    public $to;
    public $subject;
    public $cc;
    public $bcc;

    public function to($to) {
        $this->$to = $to;
        return $this;
    }

    public function subject($subject) {
        $this->subject = $subject;
        return $this;
    }

    public function cc($cc) {
        $this->cc = $cc;
        return $this;
    }

    public function bcc($bcc) {
        $this->bcc = $bcc;
        return $this;
    }

    public function build() {
        return new Email($this);
    }
}

$builder = new EmailBuilder();
$email = $builder
    ->to('bar@example.com')
    ->subject('Hello')
    ->cc('baz@example.com')
    ->bcc('foo@example.com')
    ->build();

echo $email->__toString();


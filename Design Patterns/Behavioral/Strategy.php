<?php

// Strategy Pattern Example

// Strategy
interface PaymentStrategy
{
    public function pay(float $amount): void;
}

// Concrete Strategies
class CreditCard implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Paid \$$amount using Credit Card\n";
    }
}

class Cash implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Paid \$$amount using Cash\n";
    }
}

class GooglePay implements PaymentStrategy
{
    public function pay(float $amount): void
    {
        echo "Paid \$$amount using Google Pay\n";
    }
}

// Context
class PaymentService
{
    private $paymentStrategy;

    public function __construct(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function setPaymentStrategy(PaymentStrategy $paymentStrategy)
    {
        $this->paymentStrategy = $paymentStrategy;
    }

    public function pay(float $amount): void
    {
        $this->paymentStrategy->pay($amount);
    }
}

// Usage
$paymentService = new PaymentService(new CreditCard());
$paymentService->pay(100);

$paymentService->setPaymentStrategy(new GooglePay());
$paymentService->pay(200);

$paymentService->setPaymentStrategy(new Cash());
$paymentService->pay(50);

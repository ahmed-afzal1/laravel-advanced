<?php
namespace App\Order;
use App\Billing\BankPaymentGateway;
use App\Billing\PaymentGatewayContract;

class OrderDetails
{
    private $payment;

    public function __construct(PaymentGatewayContract $payment)
    {
        $this->payment = $payment;
    }

    public function all()
    {
        $this->payment->seDiscount(50);

        return [
            'name' => 'Vicotr',
            'address' => '123 Coders tape',
        ];
    }
}
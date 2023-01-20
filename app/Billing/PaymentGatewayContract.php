<?php
namespace App\Billing;

interface PaymentGatewayContract
{
    public function seDiscount($amount);
    
    public function charge($amount);
}

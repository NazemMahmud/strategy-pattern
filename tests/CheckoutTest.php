<?php

use PHPUnit\Framework\TestCase;
use Piash\StrategyPattern\Service\Checkout;


class CheckoutTest extends TestCase
{

    public function test_checkout_first() {
        $priceRules = [
            'MG1' => ['B1G1'],
            'SR1' => ['bulk_discount', 3, 4.5]
        ];

        $checkout = new Checkout($priceRules);
        $checkout->addByCode('MG1');
        $checkout->addByCode('SR1');
        $checkout->addByCode('MG1');
        $checkout->addByCode('MG1');
        $checkout->addByCode('BN1');
        $price = $checkout->total;
        $this->assertEquals(20.45, $price);
    }

}
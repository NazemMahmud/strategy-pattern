<?php

use PHPUnit\Framework\TestCase;
use Piash\StrategyPattern\Service\Checkout;


class CheckoutTest extends TestCase
{
    private Checkout $checkout;

    /**
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->checkout = new Checkout();
    }

    public function test_checkout_first() {
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('SR1');
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('BN1');
        $price = $this->checkout->total;
        $this->assertEquals(20.45, $price);
    }

}
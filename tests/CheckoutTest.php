<?php

use PHPUnit\Framework\TestCase;
use Piash\StrategyPattern\Service\Checkout;
use Piash\StrategyPattern\Modal\Products;

class CheckoutTest extends TestCase
{
    private Checkout $checkout;

    /**
     *
     * @return void
     */
    public function setUp(): void
    {
        $this->checkout = new Checkout(new Products());
    }

    public function test_checkout_first() {
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('SR1');
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('MG1');
        $this->checkout->addByCode('BN1');
        $price = $this->checkout->total;
        dump('Price:: ' . $price);
        $this->assertEquals(22.45, $price);
    }

}
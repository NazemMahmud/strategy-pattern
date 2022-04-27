<?php

namespace Piash\StrategyPattern\Strategy;


class BulkDiscount implements Offer
{
//    private float $price;

    public function calculatePrice(array $offerRule): float
    {
        // TODO: Implement calculatePrice() method.
        return 0.0;
    }
}
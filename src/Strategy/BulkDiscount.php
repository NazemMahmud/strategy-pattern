<?php

namespace Piash\StrategyPattern\Strategy;


class BulkDiscount implements Offer
{

    public function calculatePrice(int $quantity): float
    {
        // TODO: Implement calculatePrice() method.
        return 0.0;
    }
}
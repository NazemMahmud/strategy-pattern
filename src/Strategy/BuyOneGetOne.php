<?php

namespace Piash\StrategyPattern\Strategy;


class BuyOneGetOne implements Offer
{

    public function calculatePrice(array $offerRule): float
    {
        // TODO: Implement calculatePrice() method.
        return 0.0;
    }
}
<?php

namespace Piash\StrategyPattern\Strategy;

interface Offer {
    public function calculatePrice(array $offerRule): float;
}
<?php

namespace Piash\StrategyPattern\Strategy;

interface Offer {
    public function calculatePrice(int $quantity): float;
}
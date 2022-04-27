<?php

namespace Piash\StrategyPattern\Strategy;

use PHPUnit\Util\Exception;

class OfferContext
{
    public static function getOfferType(string $offerName): Offer
    {
        return match ($offerName) {
            "B1G1" => new BuyOneGetOne(),
            "Bulk_Discount" => new BulkDiscount(),
            default => throw new Exception('Unknown Offer'),
        };
    }

}
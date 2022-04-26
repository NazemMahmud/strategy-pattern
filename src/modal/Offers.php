<?php

namespace Piash\StrategyPattern\Modal;

class Offers
{

    const OFFERS = ['B1G1', 'Bulk_Discount'];

    /**
     * product_code => []
     */
    const PRODUCT_OFFER = [
        'MG1' => ['B1G1'],
        'SR1' => ['Bulk_Discount', 3, 4.5]
    ];
}
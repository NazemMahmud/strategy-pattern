<?php

namespace Piash\StrategyPattern\Service;

use Piash\StrategyPattern\Modal\Products;


class Checkout
{
    public $total = 0;

    private $cart = [];

    private Products $product;

    /**
     * Price rules like 'Buy 1 Get 1' Or Bulk discount offer for specific products
     *
     */
    public function __construct(private array $priceRules, ?Products $product = null) {
        $this->product = $product ?? new Products();
    }

    /**
     * Add new product item into cart using product code
     *
     * @param string $code
     * @return void
     */
    public function addByCode(string $code) {
        $product =  $this->product->where('code', $code)->first();
        dump($product);
        // TODO: add item
        // TODO: calc totaL
        $this->total = 0;

    }

    private function getTotal() {

    }
}
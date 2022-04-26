<?php

namespace Piash\StrategyPattern\Service;

use Piash\StrategyPattern\Modal\Products;


class Checkout
{
    public float $total = 0;

    private array $order = [];

    private Products $product;

    /**
     * Price rules like 'Buy 1 Get 1' Or Bulk discount offer for specific products
     *
     */
    public function __construct(?Products $product = null) {
        $this->product = $product ?? new Products();
    }

    /**
     * Add new product item into cart using product code
     *
     * @param string $code
     * @return void
     */
    public function addByCode(string $code): void {
        $product =  $this->product->where('code', $code)->first();
        if ($product) {
            $this->order[] = [
                'product_id' => $product['id']
            ];
            // TODO: add item
            // TODO: calc total
            $this->total = $this->getTotal();
        }
    }

    /**
     * @return float
     */
    private function getTotal(): float {
        $order_products = [];
        foreach ($this->order as $item) {
            $product =  $this->product->where('id', $item['product_id'])->first();
            $order_products[$product['code']]['qty'] = isset($order_products[$product['code']]['qty']) ?
                ++$order_products[$product['code']]['qty'] : 1;
            $order_products[$product['code']]['price'] = $product['price'];
        }

        $total = 0;
        foreach ($order_products as $item) {
            dump($item['qty'] . '---'. $item['price']);
            $total +=  $item['qty'] * $item['price'];
        }
        return $total;
    }
}
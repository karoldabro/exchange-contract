<?php

namespace Kdabrow\ExchangeContract\Api\Trades;

use Carbon\CarbonInterface;
use Illuminate\Support\Collection;
use Kdabrow\ExchangeContract\DataObjects\Order;
use Kdabrow\ExchangeContract\DataObjects\OrderType;

interface OrderInterface
{
    /**
     * Creates order in exchange
     *
     * @param OrderType $order
     * @return Order
     */
    public function make(OrderType $order): Order;

    /**
     * Cancel order
     *
     * @param Order $order
     * @return bool
     */
    public function cancel(Order $order): bool;

    /**
     * Check status of the order on exchange
     *
     * @param Order $order
     * @return Order
     */
    public function check(Order $order): Order;

    /**
     * Get list of all orders
     *
     * @return Collection
     */
    public function all(string $pair, CarbonInterface $since, CarbonInterface $until): Collection;
}
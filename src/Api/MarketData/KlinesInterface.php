<?php

namespace Kdabrow\ExchangeContract\Api\MarketData;

use Illuminate\Support\Collection;
use Kdabrow\ExchangeContract\DataObjects\Kline;
use Kdabrow\ExchangeContract\Enums\Interval;

interface KlinesInterface
{
    /**
     * Returns quantity of klines
     *
     * @param string $symbol
     * @param string|Interval $interval
     * @param integer $quantity
     * @return Collection<int, Kline>
     */
    public function klines(string $symbol, string|Interval $interval, int $quantity): Collection;
}
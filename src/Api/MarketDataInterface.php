<?php

namespace Kdabrow\ExchangeContract\Api;

use Kdabrow\ExchangeContract\Api\MarketData\KlinesInterface;

interface MarketDataInterface
{
    public function klines(): KlinesInterface;
}
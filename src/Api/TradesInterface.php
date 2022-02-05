<?php

namespace Kdabrow\ExchangeContract\Api;

use Kdabrow\ExchangeContract\Api\MarketData\KlinesInterface;

interface TradesInterface
{
    public function order(): KlinesInterface;
}
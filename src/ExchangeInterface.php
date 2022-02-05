<?php

namespace Kdabrow\ExchangeContract;

use Kdabrow\ExchangeContract\Api\MarketDataInterface;
use Kdabrow\ExchangeContract\Api\TradesInterface;

interface ExchangeInterface extends MarketDataInterface, TradesInterface
{
}
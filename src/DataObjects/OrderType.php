<?php

namespace Kdabrow\ExchangeContract\DataObjects;

use Carbon\CarbonInterface;
use Kdabrow\ExchangeContract\Enums\Side;
use Kdabrow\ExchangeContract\Enums\Type;

class OrderType
{
    public function __construct(
        public readonly Type $type,
        public readonly Side $side,
        public readonly string $id,
        public readonly string $symbol,
        public readonly float $price,
        public readonly CarbonInterface $dateTime,
        public readonly ?float $quantity,
        public readonly ?float $stop,
    ) {
        
    }
}
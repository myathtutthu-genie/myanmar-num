<?php

namespace MHT\MyanmarNum;

class MyanmarNumClass
{
    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(protected float $kilograms)
    {
    }

    public function toPound(): float
    {
        return $this->kilograms * 2.2046;
    }
}

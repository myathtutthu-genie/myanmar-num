<?php

namespace MHT\MyanmarNum;

class MyanmarNumClass
{
    protected float $kilograms;

    public static function kilograms(float $kilograms): self
    {
        return new static($kilograms);
    }

    public function __construct(float $kilograms)
    {
        $this->kilograms = $kilograms;
    }

    public function toPound(): float
    {
        return $this->kilograms * 2.2046;
    }

    public function toStone(): float
    {
        return $this->kilograms * 0.15747;
    }
}

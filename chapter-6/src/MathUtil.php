<?php

class MathUtil
{
    public function __construct(
        // 任意のインスタンスを与えられる
        protected Math $math
    ) {
    }
    public function saturate(int $value, int $minValue, int $maxValue): int
    {
        return $this->math->min($this->math->max($value, $minValue), $maxValue);
    }
}

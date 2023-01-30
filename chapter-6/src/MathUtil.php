<?php

class MathUtil
{
    public function saturate(int $value, int $minValue, int $maxValue): int
    {
        $math = new Math();
        return $math->min($math->max($value, $minValue), $maxValue);
    }
}

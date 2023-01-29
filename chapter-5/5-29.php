<?php
function saturate(int $value, int $minValue, int $maxValue): int
{
    return min(max($value, $minValue), $maxValue);
}

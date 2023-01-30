<?php
class Math
{
    public function min(int $a, int $b): int
    {
        return $a < $b ? $a : $b;
    }
    public function max(int $a, int $b): int
    {
        return $a > $b ? $a : $b;
    }
}

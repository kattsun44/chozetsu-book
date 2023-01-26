<?php
class BuiltinKeyboard
{
    public function typekey(string $code): void {}
}

class BuiltinTrackpad
{
    public function moveCursor(float $direction, float $distance): void {}
}


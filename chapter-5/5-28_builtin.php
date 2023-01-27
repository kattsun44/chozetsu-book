<?php
// 標準デバイス
namespace BuiltinDevice;
require_once '5-26.php';

use \Operation\KeyboardInterface;
use \Operation\PointerDeviceInterface;

class BuiltinKeyboard implements KeyboardInterface
{
    public function typeKey(string $code): void {}
}

class BuiltinTrackpad implements PointerDeviceInterface
{
    public function moveCursor(float $direction, float $distance): void {}
}


<?php
// 拡張デバイス
namespace ExternalDevice;
require_once '5-26.php';
require_once '5-27.php';

use \Operation\KeyboardInterface;
use \Operation\PointerDeviceInterface;
use \Connection\USBDeviceInterface;
use \Connection\InternalBus;

class USBKeyboard implements KeyboardInterface, USBDeviceInterface
{
    public function connect(InternalBus $bus): void {}
    public function typeKey(string $code): void {}
}

class USBMouse implements PointerDeviceInterface, USBDeviceInterface
{
    public function connect(InternalBus $bus): void {}
    public function moveCursor(float $direction, float $distance): void {}
}


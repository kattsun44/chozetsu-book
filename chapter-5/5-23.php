<?php
require_once '5-22.php';

class USBKeyboard extends AbstractUSBDevice
{
    public function connect(InternalBus $bus): void {}
    public function typeKey(string $code): void {}
}

class USBMouse extends AbstractUSBDevice
{
    public function connect(InternalBus $bus): void {}
    public function moveCursor(float $direction, float $distance): void {}
}


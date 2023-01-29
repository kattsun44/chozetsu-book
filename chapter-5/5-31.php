<?php
// 抽象を仮置きする
interface USBDeviceInterface
{
    public function connect(InternalBus $bus): void;
}

// OK 抽象を前提に先に完成させる
class USBPort
{
    private InternalBus $internalBus;

    public function plug(USBDeviceInterface $device): void
    {
        $device->connect($this->internalBus);
    }
}


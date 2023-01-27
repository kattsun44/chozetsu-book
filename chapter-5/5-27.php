<?php
namespace Connection;

interface USBDeviceInterface
{
    public function connect(InternalBus $bus): void;
}

class USBPort
{
    private InternalBus $internalBus;

    public function plug(USBDeviceInterface $device): void
    {
        $device->connect($this->internalBus);
    }
}


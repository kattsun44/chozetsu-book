<?php
abstract class AbstractUSBDevice
{
    abstract public function connect(InternalBus $bus): void;
}

class USBPort
{
    private InternalBus $internalBus;

    public function plug(AbstractUSBDevice $device): void
    {
        $device->connect($this->internalBus);
    }
}


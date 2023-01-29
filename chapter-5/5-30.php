<?php
// NG 先に完成させる
class USBKeyboard
{
    public function connect(InternalBus $bus): void {}
}

class USBPort
{
    private InternalBus $internalBus;

    public function plugKeyboard(USBKeyboard $keyboard): void
    {
        $keyboard->connect($this->internalBus);
    }
}

<?php
class USBPort
{
    private InternalBus $internalBus;

    public function plugKeyboard(USBKeyboard $keyboard): void
    {
        $keyboard->connect($this->$internalBus);
    }

    public function plugMouse(USBMouse $mouse): void
    {
        $mouse->connect($this->$internalBus);
    }

    // ... plugXXX あとどれくらい必要なんだ
}


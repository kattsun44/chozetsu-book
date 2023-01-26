<?php
class PCOperator
{
    public function __construct(
        protected BuiltinKeyboard $builtinKeyboard,
        protected BuiltinTrackpad $builtinTrackpad,
        protected ?USBKeyboard $usbKeyboard = null,
        protected ?USBMouse $usbMouse = null,
    ) { }

    public function inputText(array $code): void
    {
        foreach ($codes as $code) {
            // USB キーボードがあれば使う。なければビルトイン
            if ($this->usbKeyboard) {
                $this->usbKeyboard->typekey($code);
            } else {
                $this->builtinKeyboard->typekey($code);
            }
        }
    }

    public function pointAt(int $x, int $y): void
    {
        // inputText と同じような面倒がありそうだな…
    }
}


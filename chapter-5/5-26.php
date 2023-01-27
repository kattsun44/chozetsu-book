<?php
// PC 操作
namespace Operation;

interface KeyboardInterface
{
    public function typeKey(string $code): void;
}

interface PointerDeviceInterface
{
    public function moveCursor(float $direction, float $distance): void;
}

class PCOperator
{
    public function __construct(
        protected KeyboardInterface $keyboard,
        protected PointerDeviceInterface $pointerDevice,
    ) { }

    public function inputText(array $codes): void
    {
        foreach ($codes as $code) {
            $this->keyboard->typeKey($code);
        }
    }

    public function pointAt(int $x, int $y): void
    {
        // $direction と $distance を $x, $y から考えて…
        $this->pointerDevice->moveCursor($direction, $distance);
    }
}

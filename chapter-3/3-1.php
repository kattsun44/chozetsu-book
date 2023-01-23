<?php
class Car
{
    public function __construct(
        protected $body,
        protected $engine,
        protected $wheels
    ) { }

    public function startEngine()
    {
        $this->engine->start();
    }

    public function adjustHandle()
    {
        $this->wheels[0]->adjust();
        $this->wheels[1]->adjust();
    }
}

$car = new Car($body, $engine, $wheels);
$car->startEngine();
$car->adjustHandle();

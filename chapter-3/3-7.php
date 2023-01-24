<?php
class PetShop
{
    public function __construct(
        protected LoggerInterface $logger
    ) { }

    private function paycheck()
    {
        $this->logger->log("begin");
        // transaction
        $this->logger->log("end");
    }
}

interface LoggerInterface
{
    public function log(string $message);

    // 他メソッドは割愛
}

class NullLogger implements LoggerInterface
{
    public function log(string $message)
    {
        // Do nothing.
    }
}

// $shop = new PetShop($app->getLogger());
$shop = new PetShop(new NullLogger());

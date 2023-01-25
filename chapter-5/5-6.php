<?php

class DatabaseDriverVer1 implements DatabaseDriverInterface
{
    public function write(string $key, mixed $date): void { }
    public function read(string $key): mixed { }
}


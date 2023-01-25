<?php
namespace DB;

interface DataInputInterface
{
    public function write(string $key, mixed $data): void;
}

interface DataOutputInterface
{
    public function read(string $key): mixed;
}

interface DatabaseDriverInterface extends DataInputInterface, DataOutputInterface { }

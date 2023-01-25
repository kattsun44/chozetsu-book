<?php

class WritingDatabaseDriverVer1 impliments WritingDatabaseDriverInterface
{
    public function write(string $key, mixed $data): void { }
}

class ReadingDatabaseDriverVer1 impliments ReadingDatabaseDriverInterface
{
    public function read(string $key): mixed { }
}


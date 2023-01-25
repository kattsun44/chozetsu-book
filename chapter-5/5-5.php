<?php

class WritingDatabaseDriverVer2 impliments WritingDatabaseDriverInterface
{
    public function write(string $key, mixed $data): void { }
}

class ReadingDatabaseDriverVer2 impliments ReadingDatabaseDriverInterface
{
    public function read(string $key): mixed { }
}


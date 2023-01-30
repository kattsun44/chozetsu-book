<?php

class WritingDatabaseDriverVer2 implements WritingDatabaseDriverInterface
{
  public function write(string $key, mixed $data): void
  {
  }
}

class ReadingDatabaseDriverVer2 implements ReadingDatabaseDriverInterface
{
  public function read(string $key): mixed
  {
  }
}

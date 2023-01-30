<?php

class WritingDatabaseDriverVer1 implements WritingDatabaseDriverInterface
{
  public function write(string $key, mixed $data): void
  {
  }
}

class ReadingDatabaseDriverVer1 implements ReadingDatabaseDriverInterface
{
  public function read(string $key): mixed
  {
  }
}

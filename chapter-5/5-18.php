<?php
namespace VenderDB;

class VenderDatabaseDriver implements DatabaseDriverInterface
{
    public function write(string $key, mixed $data): void
    {
        // キーにデータを保存
    }

    public function read(string $key): mixed
    {
        // return キーで取得したデータ;
    }
}


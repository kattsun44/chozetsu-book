<?php
namespace MyApp;

class CommandExecuter
{
    public function __construct(
        // DatabaseDriverInterface ではなく
        protected DataInputInterface $input
    ) { }

    public function exec(...$args): void
    {
        $this->input->write(...$args);
    }
}

class QueryService
{
    public function __construct(
        // DatabaseDriverInterface ではなく
        protected DataOutputInterface $output
    ) { }

    public function query(...$args): mixed
    {
        return $this->output->read(...$args);
    }
}

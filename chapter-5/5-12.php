<?php
class TaskDisplay
{
    public function __construct(
        protected int $total,
        protected int $remains
    ) { }

    public function show(): string
    {
        return "{$this->total} 件中 {$this->remains} 件が完了しました";
    }
    // 他の部分は省略
}


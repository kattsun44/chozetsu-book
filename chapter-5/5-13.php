<?php
require_once '5-12.php';

class PercentileTaskDisplay extends TaskDisplay
{
    public function show(): string
    {
        $percent = (int)(100.0 * $this->remains / $this->total);
        return parent::show() . "({$percent}%)\n";
    }
}


<?php
require_once '5-12.php';

class PercentileTaskDisplay extends TaskDisplay
{
    public function show(): string
    {
        if ($this->total != 0) {
            $percent = (int)(100.0 * $this->remains / $this->total);
        } else {
            // やることがない=最初から完了している、なので 100% とする
            $percent = 100;
        }
        return parent::show() . "({$percent}%)\n";
    }
}


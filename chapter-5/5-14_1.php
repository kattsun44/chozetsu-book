<?php
require_once '5-12.php';
require_once '5-14.php';

$task = new PercentileTaskDisplay(0, 0);

// total が 0 のときは 100%
echo $task->show();

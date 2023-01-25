<?php
require_once '5-12.php';
require_once '5-13.php';

$task = new PercentileTaskDisplay(0, 0);

// total が 0 のときはゼロ除算実行時エラーが発生する
echo $task->show();

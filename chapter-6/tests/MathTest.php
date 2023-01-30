<?php

use PHPUnit\Framework\TestCase;

// クラスが自動ロードされない場合用。Composer で自動ロードできるなら不要になる
require_once __DIR__ . '/../src/Math.php';

class MathTest extends TestCase
{
    public function testMinMax(): void
    {
        $math = new Math();

        $minExpected = 1;
        $minResult = $math->min(1, 2);
        $this->assertEquals($minExpected, $minResult);

        $maxExpected = 2;
        $maxResult = $math->max(1, 2);
        $this->assertEquals($maxExpected, $maxResult);
    }
}

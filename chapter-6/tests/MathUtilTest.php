<?php

use PHPUnit\Framework\TestCase;

// クラスが自動ロードされない場合用。Composer で自動ロードできるなら不要になる
require_once __DIR__ . '/../src/Math.php';
require_once __DIR__ . '/../src/MathUtil.php';

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $mathStab = $this->createMock(Math::class);
        $mathUtil = new MathUtil($mathStab);

        $mathStab->method('max')->willReturn(2);
        $mathStab->method('min')->willReturn(1);
        $result = $mathUtil->saturate(2, 1, 3);

        $this->assertEquals(2, $result);
    }
}

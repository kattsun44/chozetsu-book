<?php

use PHPUnit\Framework\TestCase;

// クラスが自動ロードされない場合用。Composer で自動ロードできるなら不要になる
require_once __DIR__ . '/../src/Math.php';
require_once __DIR__ . '/../src/MathUtil.php';

class MathUtilTest extends TestCase
{
    public function testSaturate(): void
    {
        $math = $this->createMock(Math::class);
        $mathUtil = new MathUtil($math);

        // 少なくとも1回 max が引数 2, 1 で呼ばれ、2 を返す
        $math->expects($this->atLeastOnce())
            ->method('max')
            ->with($this->equalTo(2), $this->equalTo(1))
            ->willReturn(2);

        // 少なくとも1回 min が引数 2, 3 で呼ばれ、2 を返す
        $math->expects($this->atLeastOnce())
            ->method('min')
            ->with($this->equalTo(2), $this->equalTo(3))
            ->willReturn(2);


        $result = $mathUtil->saturate(2, 1, 3);
        $this->assertEquals(2, $result);
    }
}

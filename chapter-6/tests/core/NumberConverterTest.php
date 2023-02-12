<?php

namespace FizzBuzz\Core;

use PHPUnit\Framework\TestCase;

class NumberConverterTest extends TestCase
{
    public function testConvert()
    {
        $fizzBuzz = new NumberConverter();
        $this->assertEquals("1", $fizzBuzz->convert(1));
    }
}

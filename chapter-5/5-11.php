<?php
require_once '5-9.php';
require_once '5-10.php';

use FizzBuzz\Core\NumberConverter;
use FizzBuzz\Spec\CyclicNumberRule;
use FizzBuzz\Spec\PassThroughRule;

$fizzBuzz = new NumberConverter([
    new CyclicNumberRule(3, "Fizz"),
    new CyclicNumberRule(5, "Buzz"),
    new PassThroughRule(),
]);

echo $fizzBuzz->convert(1), "\n";
echo $fizzBuzz->convert(3), "\n";
echo $fizzBuzz->convert(5), "\n";
echo $fizzBuzz->convert(15), "\n";


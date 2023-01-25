<?php

function fizz_buzz(int $n): string
{
    if ($n % 15 == 0) {
        // 3 でも 5 でも割り切れる場合は、Fizz や Buzz だけを
        // return してしまわないよう先に判定する
        return "FizzBuzz";
    } elseif ($n % 3 == 0) {
        return "Fizz";
    } elseif ($n % 5 == 0) {
        return "Buzz";
    } else {
        return (string)$n;
    }
}

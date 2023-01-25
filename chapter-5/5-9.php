<?php

namespace FizzBuzz\Core;

interface ReplaceRuleInterface
{
    public function match(string $carry, int $n): bool;
    public function apply(string $carry, int $n): string;
}

class NumberConverter
{
    /**
     * @param ReplaceRuleInterface[] $rules
     */
    public function __construct(
        protected array $rules
    ) { }

    public function convert(int $n): string
    {
        $carry = "";
        foreach ($this->rules as $rule) {
            if ($rule->match($carry, $n)) {
                $carry = $rule->apply($carry, $n);
            }
        }
        return $carry;
    }
}

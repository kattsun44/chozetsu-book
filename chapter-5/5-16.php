<?php
require_once '5-15_1.php';

interface CatCageInterface
{
    public function insert(Cat $cat): void;
}

class VeryHugeCatCage implements CatCageInterface
{
    // OK 猫を入れたいだけの人が使っても全然問題ない。逆はNG
    public function insert(Animal $anyAnimal): void { }
}

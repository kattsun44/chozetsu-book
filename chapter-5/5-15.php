<?php
require_once '5-15_1.php';

interface ZooInterface
{
    public function randomWalk(): Animal;
}

class CatOnlyZoo implements ZooInterface
{
    // OK 動物を期待した呼び出し元に常に猫を返すのはセーフ。逆はまずい
    public function randomWalk(): Cat { }
}

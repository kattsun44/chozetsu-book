<?php
abstract class Pet
{
    abstract public function reaction();
}

class PetshopCustomer
{
    public function touch(Pet $pet)
    {
        $pet->reaction();
    }
}

// -----

class Dog extends Pet
{
    public function reaction()
    {
        echo "ワン\n";
    }
}

class Cat extends Pet
{
    public function reaction()
    {
        echo "にゃん\n";
    }
}

$customer = new PetshopCustomer();
$customer->touch(new Dog()); // ワン
$customer->touch(new Cat()); // にゃん

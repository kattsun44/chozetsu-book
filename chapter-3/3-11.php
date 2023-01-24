<?php
require('3-4.php');

class ParameterizePet extends Pet
{
    public function __construct(
        protected string $voice
    ) { }

    public function reaction()
    {
        echo $this->voice;
    }
}

$customer = new PetshopCustomer();
$customer->touch(new ParameterizePet("ワン\n"));
$customer->touch(new ParameterizePet("ニャン\n"));

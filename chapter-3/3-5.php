<?php
class PetshopCustomer
{
    public function touch(Pet $pet)
    {
        switch ($pet->type) {
            case 'Dog':
                echo "ワン\n";
                break;
            case 'Cat';
                echo "にゃん\n";
                break;
            default:
                throw new InvalidArgumentException();
        }
    }
}

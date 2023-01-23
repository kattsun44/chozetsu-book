<?php
class CarOwner
{
    public function drive()
    {
        // デメテルの法則に反するメソッドチェーン
        $this->car->startEngine()->start();
    }
}

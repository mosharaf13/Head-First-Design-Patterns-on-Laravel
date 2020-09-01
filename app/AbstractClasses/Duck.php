<?php

namespace App\AbstractClasses;

use App\Interfaces\FlyBehavior;
use App\Interfaces\QuackBehavior;

abstract class Duck
{

    private $flyBehavior;
    private $quackBehavior;

    public function __construct(FlyBehavior $flyBehavior, QuackBehavior $quackBehavior)
    {
        $this->flyBehavior = $flyBehavior;
        $this->quackBehavior = $quackBehavior;
    }

    public function swim()
    {
        //swim
    }

    public function display()
    {
        //display
    }

    public function performFly()
    {
        return $this->flyBehavior->fly();
    }

    public function performQuack()
    {
        $this->quackBehavior->quack();
    }

}



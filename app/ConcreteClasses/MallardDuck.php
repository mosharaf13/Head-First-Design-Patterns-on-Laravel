<?php
/**
 * Created by IntelliJ IDEA.
 * User: m
 * Date: 9/1/20
 * Time: 10:23 AM
 */

namespace App\ConcreteClasses;


use App\AbstractClasses\Duck;
use App\Behavior\FlyBehaviors\FlyWithWings;
use App\Behavior\QuackBehaviors\Quack;

class MallardDuck extends Duck
{
    public function __construct(FlyWithWings $flyBehavior, Quack $quackBehavior)
    {
        parent::__construct($flyBehavior, $quackBehavior);
    }
}

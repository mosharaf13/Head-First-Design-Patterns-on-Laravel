<?php
/**
 * Created by IntelliJ IDEA.
 * User: m
 * Date: 9/1/20
 * Time: 10:27 AM
 */

namespace App\Behavior\QuackBehaviors;


use App\Interfaces\QuackBehavior;

class Quack implements QuackBehavior
{
    public function quack()
    {
        return "I am quacking";
    }
}

<?php
/**
 * Created by IntelliJ IDEA.
 * User: m
 * Date: 9/1/20
 * Time: 10:26 AM
 */

namespace App\Behavior\FlyBehaviors;


use App\Interfaces\FlyBehavior;

class FlyWithWings implements FlyBehavior
{

    public function fly()
    {
        return "i am flying with wings";
    }
}

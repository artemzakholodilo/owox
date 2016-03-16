<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

class FixedStrategy extends CostStrategy
{

    public function cost(Lesson $lesson)
    {
        return 200;
    }

    public function chargeType()
    {
        return "Fixed price";
    }
}
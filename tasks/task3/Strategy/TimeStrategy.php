<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

class TimeStrategy extends CostStrategy
{

    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 100;
    }

    public function chargeType()
    {
        return "Timed price";
    }
}
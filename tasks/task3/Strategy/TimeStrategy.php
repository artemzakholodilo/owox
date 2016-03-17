<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

class TimeStrategy extends CostStrategy
{

    /**
     * @param Lesson $lesson
     * @return float
     */
    public function cost(Lesson $lesson)
    {
        return $lesson->getDuration() * 100;
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return "Timed price";
    }
}
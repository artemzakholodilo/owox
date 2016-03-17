<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

/**
 * Class FixedStrategy
 * @package Tasks\task3\Strategy
 */
class FixedStrategy extends CostStrategy
{

    /**
     * @param Lesson $lesson
     * @return float
     */
    public function cost(Lesson $lesson)
    {
        return 200;
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return "Fixed price";
    }
}
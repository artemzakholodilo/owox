<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

/**
 * Class CostStrategy
 * @package Tasks\task3\Strategy
 */
abstract class CostStrategy
{
    /**
     * @param Lesson $lesson
     * @return float
     */
    abstract function cost(Lesson $lesson);

    /**
     * @return string
     */
    abstract function chargeType();
}
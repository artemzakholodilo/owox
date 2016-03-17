<?php

namespace Tasks\task3;

use Tasks\task3\Strategy\CostStrategy;

/**
 * Class Lesson
 * @package Tasks\task3
 */
class Lesson
{
    /**
     * @var float
     */
    protected $duration;

    /**
     * @var CostStrategy
     */
    protected $costStrategy;

    /**
     * Lesson constructor.
     * @param $duration
     * @param CostStrategy $strategy
     */
    public function __construct($duration, CostStrategy $strategy)
    {
        $this->duration = $duration;
        $this->costStrategy = $strategy;
    }

    /**
     * @return float
     */
    public function cost()
    {
        return $this->costStrategy->cost($this);
    }

    /**
     * @return string
     */
    public function chargeType()
    {
        return $this->costStrategy->chargeType();
    }

    public function getDuration()
    {
        return $this->duration;
    }
}
<?php

namespace Tasks\task3\Strategy;

use Tasks\task3\Lesson;

abstract class CostStrategy
{
    abstract function cost(Lesson $lesson);

    abstract function chargeType();
}
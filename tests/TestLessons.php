<?php

namespace Tasks\tests;

use \Tasks\task3\Grammar;
use \Tasks\task3\Speaking;
use \Tasks\task3\Strategy\FixedStrategy;
use \Tasks\task3\Strategy\TimeStrategy;

class TestLessons extends \PHPUnit_Framework_TestCase
{
    /**
     * @return bool
     */
    public function testLessonsGrammarFixedCostGood()
    {
        $cost = $grammar = null;
        for ($i = 0; $i < 2; $i++) {
            $grammar = new Grammar(2, new FixedStrategy());
            $cost += $grammar->cost();
        }
        $this->assertEquals(400, $cost);
    }

    /**
     * @return bool
     */
    public function testLessonsSpeakingTimedCostGood()
    {
        $cost = $spaeking = null;
        for ($i = 0; $i < 2; $i++) {
            $spaeking = new Speaking(3, new TimeStrategy());
            $cost += $spaeking->cost();
        }
        $this->assertEquals(600, $cost);
    }

    /**
     * @return bool
     */
    public function testLessonsGrammarTimedCostBad()
    {
        $cost = $grammar = null;
        for ($i = 0; $i < 2; $i++) {
            $grammar = new Grammar(3, new TimeStrategy());
            $cost += $grammar->cost();
        }
        $this->assertNotEquals(900, $cost);
    }
}
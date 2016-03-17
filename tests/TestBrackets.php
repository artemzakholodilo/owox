<?php

require_once(__DIR__ . "/../tasks/task1.php");

class TestBrackets extends \PHPUnit_Framework_TestCase
{
    /**
     * @var string
     */
    private $correctBrackets = '[5] * 3 - ( 4 - 7 * [3-6])';

    /**
     * @var string
     */
    private $wrongBrackets = '( 5 * 3 [ 6 ) - 6]';

    /**
     * @return bool
     */
    public function testBracketsCorrect()
    {
        $this->assertTrue(checkBrackets($this->correctBrackets));
    }

    /**
     * @return bool
     */
    public function testWrongBrackets()
    {
        $this->assertFalse(checkBrackets($this->wrongBrackets));
    }
}

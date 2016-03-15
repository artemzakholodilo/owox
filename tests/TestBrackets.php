<?php

require_once(__DIR__ . "/../tasks/task1.php");

class TestBrackets extends PHPUnit_Framework_TestCase
{
    private $correctBrackets = '[5] * 3 - ( 4 - 7 * [3-6])';

    private $wrongBrackets = '( 5 * 3 [ 6 ) - 6]';

    public function testBracketsCorrect()
    {
        $this->assertTrue(checkBrackets($this->correctBrackets));
    }

    public function testWrongBrackets()
    {
        $this->assertFalse(checkBrackets($this->wrongBrackets));
    }
}

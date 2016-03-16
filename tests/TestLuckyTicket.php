<?php

require_once(__DIR__ . "/../tasks/task2.php");

class TestLuckyTicket extends PHPUnit_Framework_TestCase
{
    public function testTicketsSuccessResult()
    {
        $this->assertEquals(10, luckyTickets(2));
    }

    public function testTicketsWrongResult()
    {
        $this->assertNotEquals(8, luckyTickets(2));
    }

    public function testInvalidExceptionThrowed()
    {
        try {
            luckyTickets(3);
        } catch (\InvalidArgumentException $ex) {
            return;
        }

        $this->fail("An exception dont throwed");
    }
}

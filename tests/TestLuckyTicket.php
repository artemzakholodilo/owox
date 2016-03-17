<?php

require_once(__DIR__ . "/../tasks/task2.php");

class TestLuckyTicket extends PHPUnit_Framework_TestCase
{
    /**
     * @return bool
     */
    public function testTicketsSuccessResult()
    {
        $this->assertEquals(10, luckyTickets(2));
    }

    /**
     * @return bool
     */
    public function testTicketsWrongResult()
    {
        $this->assertNotEquals(8, luckyTickets(2));
    }

    /**
     * @return bool
     */
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

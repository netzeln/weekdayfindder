<?php
require_once "src/FindWeekday.php";

class FindWeekdayTest extends PHPUnit_Framework_TestCase{


    function test_FindWeekday_Today()
    {
        $test_FindWeekday = new FindWeekday(18,2,2016);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Thursday", $result);
    }

    function test_FindWeekday_Tomorrow()
    {
        $test_FindWeekday = new FindWeekday(19,2,2016);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Friday", $result);
    }

    function test_FindWeekday_Yesterday()
    {
        $test_FindWeekday = new FindWeekday(17,2,2016);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Wednesday", $result);
    }
    function test_FindWeekday_America()
    {
        $test_FindWeekday = new FindWeekday(4,6,1776);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Tuesday", $result);
    }
    function test_FindWeekday_longAgo()
    {
        $test_FindWeekday = new FindWeekday(1,1,1753);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Monday", $result);
    }

    function test_FindWeekday_preGreg()
    {
        $test_FindWeekday = new FindWeekday(1,1,1700);

        $result = $test_FindWeekday->getWeekday();

        $this->assertEquals("Monday", $result);
    }
}
 ?>

<?php

use PHPUnit\Framework\TestCase;

class TimeConversion extends TestCase
{
    /** @test * */
    public function it_can_convert_minutes_into_seconds()
    {
        $timeAmountInMinutes = 60;

        $this->assertEquals(3600, TimeConversion::get($timeAmountInMinutes)->seconds());
        $this->assertEquals(1, TimeConversion::get($timeAmountInMinutes)->hour());
    }
}

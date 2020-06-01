<?php

use App\Link;
use PHPUnit\Framework\TestCase;

class LinkTest extends TestCase
{
    /** @test **/
    public function it_changes_string_into_an_anchor()
    {
        $str = 'This is a string with [Github](http://github.com) text';

        $link = new Link();

        $this->assertEquals(
            "This is a string with <a href='http://github.com'>Github</a> test",
            $link->handle($str)
        );
    }
}

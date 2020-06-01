<?php

use App\Heading;
use PHPUnit\Framework\TestCase;

class HeadingTest extends TestCase
{
    /** @test **/
    public function it_changes_a_heading_markdown_into_a_heading_tag()
    {
       $str = "#Hello There";

       $heading = new Heading();

       $this->assertEquals("<h1>Hello There</h1>", $heading->handle($str));
    }
}

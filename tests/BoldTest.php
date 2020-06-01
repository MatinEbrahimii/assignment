<?php

use App\Bold;
use PHPUnit\Framework\TestCase;

class BoldTest extends TestCase
{
    /** @test * */
    public function it_changes_string_into_bold_when_get_the_string_between_two_underline()
    {
        $str = 'This is a string with __some bold__ text';

        $bold = new Bold();

        $this->assertEquals("This is a string with <b>some bold</b> test", $bold->handle($str));
    }
}

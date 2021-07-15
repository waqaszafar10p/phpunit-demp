<?php

use PHPUnit\Framework\TestCase;

class ExampleAssertionTest extends TestCase
{
    public function testThatStringMatches()
    {
        $str1 = 'waqas';
        $str2 = 'waqas';
        $this->assertSame($str1, $str2);
    }
    public function testPlusIsWorking()
    {
        $this->assertEquals(10, 5 + 5);
    }
}

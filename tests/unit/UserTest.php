<?php

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    protected $user;
    
    public function setUp(): void
    {
        $this->user = new \App\Models\User;
    }
    public function test_that_we_can_get_the_first_name()
    {
        $this->user->setFirstName('waqas');
        $this->assertEquals($this->user->getFirstName(), 'waqas');
    }

    /** @test */

    public function that_we_can_get_the_last_name()
    {
        $this->user->setLastName('zafar');
        $this->assertEquals($this->user->getLastName(), 'zafar');
    }

    public function testThatWeCanGetFullName()
    {
        $this->user->setFirstName('waqas');
        $this->user->setLastName('zafar');
        $this->assertEquals($this->user->getFullName(), 'waqas zafar');
    }
}

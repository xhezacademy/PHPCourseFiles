<?php

use SimpleBlog\Controllers\HomeController;

class HomeControllerTest extends PHPUnit_Framework_TestCase
{
    public function setUp()
    {
        $this->home = new HomeController();
    }
    public function testIndexReturnsWelcomeMessage()
    {
        $this->assertTrue($this->home->index());
    }

    public function testAboutPage()
    {
        $this->expectOutputString('home/about', $this->home->about());
    }

    public function testReturnsSelfInstance()
    {
        $this->assertInstanceOf('SimpleBlog\Controllers\HomeController', $this->home);
    }
}

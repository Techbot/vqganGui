<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;
use App\Entity\Framefactory;

class FrameTest extends TestCase
{

    public function testFrame()
    {
        $p = FrameFactory::create("tests title", "tests content");

        $this->assertEquals("tests title", $p->getTitle());
        $this->assertEquals("tests content", $p->getContent());
        $this->assertNotNull( $p->getCreatedAt());
    }
}
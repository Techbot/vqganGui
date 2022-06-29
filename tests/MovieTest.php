<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class MovieTest extends TestCase
{

    public function testFrame()
    {
        $p = MovieFactory::create("tests title", "tests content");

        $this->assertEquals("tests title", $p->getTitle());
        $this->assertEquals("tests content", $p->getContent());
        $this->assertNotNull( $p->getCreatedAt());
    }
}
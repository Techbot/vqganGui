<?php

namespace App\Tests;

use PHPUnit\Framework\TestCase;

class ActionTest extends TestCase
{

    public function testAction()
    {
        $p = ActionFactory::create("tests title", "tests content");

        $this->assertEquals("tests title", $p->getTitle());
        $this->assertEquals("tests content", $p->getContent());
        $this->assertNotNull( $p->getCreatedAt());
    }
}
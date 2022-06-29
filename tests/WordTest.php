<?php
namespace App\Tests;

use PHPUnit\Framework\TestCase;

class WordTest extends TestCase
{

    public function testWord()
    {
        $p = WordFactory::create("tests title", "tests content");

        $this->assertEquals("tests title", $p->getTitle());
        $this->assertEquals("tests content", $p->getContent());
        $this->assertNotNull( $p->getCreatedAt());
    }
}
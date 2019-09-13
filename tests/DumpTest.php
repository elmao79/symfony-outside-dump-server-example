<?php

namespace MyPrj\Tests;

use MyPrj\Debug\DumperBuilder;
use PHPUnit\Framework\TestCase;

class DumpTest extends TestCase
{
    public static function setUpBeforeClass(): void
    {
        DumperBuilder::Build();
    }

    public function testArray()
    {
        $obj = array(
            'one' => 1,
            'two' => 2,
            'three' => 3
        );
        dump($obj);
        $this->assertTrue(true);
    }

    public function testObject()
    {
        $obj = new \stdClass();
        $obj->one = 1;
        $obj->two = 2;
        $obj->three = 3;
        dump($obj);
        $this->assertTrue(true);
    }
}

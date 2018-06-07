<?php
namespace Tests;

use Generator\Foo;
use PHPUnit\Framework\TestCase;

class FooTest extends TestCase
{
    function testAMemberFuncWithNoParameter(){
        $foo = new Foo();

        $this->assertSame($foo->aMemberFunc(), 'default ok');
    }

    function testAMemberFuncWithParameter(){
        $foo = new Foo();

        $this->assertSame($foo->aMemberFunc('Hello'), 'Hello ok');
    }
}
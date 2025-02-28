<?php

namespace Ljheisenberg\Test;

use Ljheisenberg\MyComposerPackage\HelloWorld;
use PHPUnit\Framework\TestCase;

class HelloWorldTest extends TestCase
{
    public function testSayHello()
    {
        $hello = new HelloWorld();
        $this->assertEquals('Hello, Composer!', $hello->sayHello());
    }
}
<?php

namespace Foris\TravisCI\Tests;

use Foris\TravisCI\HelloWorld;
use PHPUnit\Framework\TestCase;

/**
 * Class HelloTest
 */
class HelloTest extends TestCase
{
    public function testSayHello()
    {
        $this->assertEquals('Hello travis-ci!', (new HelloWorld())->sayHello('travis-ci'));
    }
}

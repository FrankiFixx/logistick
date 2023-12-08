<?php

namespace FrankiFixx\logistick;

use PHPUnit\Framework\TestCase;

class LogistickTest extends TestCase
{

    public function testInit()
    {
        $object = Logistick::init();
        $this->assertInstanceOf('FrankiFixx\logistick\Logistick', $object);
    }
}

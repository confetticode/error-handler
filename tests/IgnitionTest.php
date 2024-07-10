<?php

namespace Tests\Confetti\Ignition;

use Confetti\Ignition\Ignition;
use PHPUnit\Framework\TestCase;

class IgnitionTest extends TestCase
{
    public function testDebugMode()
    {
        $ignition = new Ignition;
        $this->assertFalse($ignition->isDebug());

        $ignition->setDebug(true);
        $this->assertTrue($ignition->isDebug());
    }
}

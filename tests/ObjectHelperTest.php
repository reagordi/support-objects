<?php

declare(strict_types=1);

namespace Reagordi\Support\Objects\Tests;

use Reagordi\Support\Objects\ObjectHelper;
use PHPUnit\Framework\TestCase;
use stdClass;

class ObjectHelperTest extends TestCase
{
    public function testConfigure(): void
    {
        $class = new stdClass();

        ObjectHelper::configure($class, [
            'testParam' => true
        ]);

        $this->assertInstanceOf(stdClass::class, $class);
        $this->assertTrue($class->testParam);
    }
}

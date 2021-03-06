<?php

namespace BjyProfilerTest\Db\Adapter;

use BjyProfiler\Db\Adapter\ProfilingAdapter;
use Laminas\Db\Adapter\Adapter;

class ProfilingAdapterTest extends \PHPUnit\Framework\TestCase
{
    public function testInstanceOfAdapter()
    {
        $instance = new ProfilingAdapter(['driver' => 'Pdo']);
        self::assertInstanceOf(Adapter::class, $instance);
    }
}

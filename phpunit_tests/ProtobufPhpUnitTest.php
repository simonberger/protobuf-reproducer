<?php

namespace phpunit_tests;

use Google\Protobuf\Api;
use PHPUnit\Framework\TestCase;

class ProtobufPhpUnitTest extends TestCase
{
    public function testProtobuf(): void
    {
        $message = new Api();
        // Not necessary for the zend_mm_heap corrupted error to appear.
        $message->setName('TestApi');
        $this->assertNull(null);
    }
}

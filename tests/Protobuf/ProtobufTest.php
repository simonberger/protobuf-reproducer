<?php


namespace Tests\Protobuf;

use Codeception\Test\Unit;
use Google\Protobuf\Api;
use Tests\Support\ProtobufTester;

class ProtobufTest extends Unit
{
    protected ProtobufTester $tester;

    public function testProtobuf(): void
    {
        $message = new Api();
        // Not necessary for the zend_mm_heap corrupted error to appear.
        $message->setName('TestApi');
        $this->assertNull(null);
    }
}

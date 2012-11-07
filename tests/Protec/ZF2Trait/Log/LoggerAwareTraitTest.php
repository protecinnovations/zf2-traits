<?php

namespace ProtecTest\ZF2Trait\Log;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/LoggerAwareMock.php';

class LoggerAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new LoggerAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetLogger()
    {
        $this->assertAttributeEquals(null, 'logger', $this->object);

        $logger = M::mock('\Zend\Log\LoggerInterface');

        $this->object->setLogger($logger);

        $this->assertAttributeEquals($logger, 'logger', $this->object);
    }
}
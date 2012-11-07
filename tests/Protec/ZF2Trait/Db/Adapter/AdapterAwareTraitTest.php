<?php

namespace ProtecTest\ZF2Trait\Db\Adapter;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/AdapterAwareMock.php';

class AdapterAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new AdapterAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetDbAdapter()
    {
        $this->assertAttributeEquals(null, 'adapter', $this->object);

        $adapter = M::mock('\Zend\Db\Adapter\Adapter');

        $this->object->setDbAdapter($adapter);

        $this->assertAttributeEquals($adapter, 'adapter', $this->object);
    }
}
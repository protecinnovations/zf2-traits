<?php

namespace ProtecTest\ZF2Trait\ServiceManager;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/ServiceManagerAwareMock.php';

class ServiceManagerAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new ServiceManagerAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetServiceManager()
    {
        $this->assertAttributeEquals(null, 'service_manager', $this->object);

        $service_manager = M::mock('\Zend\ServiceManager\ServiceManager');

        $this->object->setServiceManager($service_manager);

        $this->assertAttributeEquals($service_manager, 'service_manager', $this->object);
    }
}
<?php

namespace ProtecTest\ZF2Trait\ServiceManager;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/ServiceLocatorAwareMock.php';

class ServiceLocatorAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new ServiceLocatorAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetServiceLocator()
    {
        $this->assertAttributeEquals(null, 'service_locator', $this->object);

        $service_locator = M::mock('\Zend\ServiceManager\ServiceLocatorInterface');

        $this->object->setServiceLocator($service_locator);

        $this->assertAttributeEquals($service_locator, 'service_locator', $this->object);
    }

    public function testGetServiceLocator()
    {
        $this->assertNull($this->object->getServiceLocator());

        $service_locator = M::mock('\Zend\ServiceManager\ServiceLocatorInterface');

        $this->object->setServiceLocator($service_locator);

        $this->assertEquals($service_locator, $this->object->getServiceLocator());
    }
}
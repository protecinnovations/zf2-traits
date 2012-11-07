<?php

namespace ProtecTest\ZF2Trait\EventManager;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/SharedEventManagerAwareMock.php';

class SharedEventManagerAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new SharedEventManagerAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetSharedManager()
    {
        $this->assertAttributeEquals(null, 'shared_event_manager', $this->object);

        $shared_event_manager = M::mock('\Zend\EventManager\SharedEventManagerInterface');

        $this->object->setSharedManager($shared_event_manager);

        $this->assertAttributeEquals($shared_event_manager, 'shared_event_manager', $this->object);
    }

    public function testGetSharedManager()
    {
        $this->assertEquals(null, $this->object->getSharedManager());

        $shared_event_manager = M::mock('\Zend\EventManager\SharedEventManagerInterface');

        $this->object->setSharedManager($shared_event_manager);

        $this->assertEquals($shared_event_manager, $this->object->getSharedManager());
    }

    public function testUnsetSharedManager()
    {
        $this->assertAttributeEquals(null, 'shared_event_manager', $this->object);

        $shared_event_manager = M::mock('\Zend\EventManager\SharedEventManagerInterface');

        $this->object->setSharedManager($shared_event_manager);

        $this->assertAttributeEquals($shared_event_manager, 'shared_event_manager', $this->object);

        $this->object->unsetSharedManager();

        $this->assertAttributeEquals(null, 'shared_event_manager', $this->object);
    }
}
<?php

namespace ProtecTest\ZF2Trait\EventManager;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/EventManagerAwareMock.php';

class EventManagerAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new EventManagerAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetEventManager()
    {
        $this->assertAttributeEquals(null, 'event_manager', $this->object);

        $event_manager = M::mock('\Zend\EventManager\EventManagerInterface');

        $this->object->setEventManager($event_manager);

        $this->assertAttributeEquals($event_manager, 'event_manager', $this->object);
    }

    public function testGetEventManager()
    {
        $this->assertEquals(null, $this->object->getEventManager());

        $event_manager = M::mock('\Zend\EventManager\EventManagerInterface');

        $this->object->setEventManager($event_manager);

        $this->assertEquals($event_manager, $this->object->getEventManager());
    }
}
<?php

namespace ProtecTest\ZF2Trait\InputFilter;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/InputFilterAwareMock.php';

class InputFilterAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new InputFilterAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetInputFilter()
    {
        $this->assertAttributeEquals(null, 'input_filter', $this->object);

        $input_filter = M::mock('\Zend\InputFilter\InputFilterInterface');

        $this->object->setInputFilter($input_filter);

        $this->assertAttributeEquals($input_filter, 'input_filter', $this->object);
    }

    public function testGetInputFilter()
    {
        $this->assertNull($this->object->getInputFilter());

        $input_filter = M::mock('\Zend\InputFilter\InputFilterInterface');

        $this->object->setInputFilter($input_filter);

        $this->assertEquals($input_filter, $this->object->getInputFilter());
    }
}
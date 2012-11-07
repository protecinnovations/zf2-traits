<?php

namespace ProtecTest\ZF2Trait\Form;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/FormFactoryAwareMock.php';

class FormFactoryAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new FormFactoryAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetFormFactory()
    {
        $this->assertAttributeEquals(null, 'form_factory', $this->object);

        $form_factory = M::mock('\Zend\Form\Factory');

        $this->object->setFormFactory($form_factory);

        $this->assertAttributeEquals($form_factory, 'form_factory', $this->object);
    }
}
<?php

namespace ProtecTest\ZF2Trait\I18n\Translator;

use \PHPUnit_Framework_TestCase as TestCase;
use \Mockery as M;

require_once __DIR__ . '/TranslatorAwareMock.php';

class TranslatorAwareTraitTest extends TestCase
{
    protected $object = null;

    public function setUp()
    {
        $this->object = new TranslatorAwareMock();
    }

    public function tearDown()
    {
        M::close();
    }

    public function testSetTranslator()
    {
        $this->assertAttributeEquals(null, 'translator', $this->object);

        $translator = M::mock('\Zend\I18n\Translator\Translator');

        $this->object->setTranslator($translator);

        $this->assertAttributeEquals($translator, 'translator', $this->object);
    }

    public function testSetTranslatorAndTextDomain()
    {
        $this->assertAttributeEquals(null, 'translator', $this->object);
        $this->assertAttributeEquals('default', 'translator_text_domain', $this->object);

        $translator = M::mock('\Zend\I18n\Translator\Translator');
        $text_domain = 'domain';

        $this->object->setTranslator($translator, $text_domain);

        $this->assertAttributeEquals($translator, 'translator', $this->object);
        $this->assertAttributeEquals($text_domain, 'translator_text_domain', $this->object);
    }

    public function testGetTranslator()
    {
        $this->assertNull($this->object->getTranslator());

        $translator = M::mock('\Zend\I18n\Translator\Translator');

        $this->object->setTranslator($translator);

        $this->assertEquals($translator, $this->object->getTranslator());
    }

    public function testHasTranslator()
    {
        $this->assertFalse($this->object->hasTranslator());

        $translator = M::mock('\Zend\I18n\Translator\Translator');

        $this->object->setTranslator($translator);

        $this->assertTrue($this->object->hasTranslator());
    }

    public function testSetTranslatorEnabled()
    {
        $this->assertAttributeEquals(true, 'translator_enabled', $this->object);

        $enabled = false;

        $this->object->setTranslatorEnabled($enabled);

        $this->assertAttributeEquals($enabled, 'translator_enabled', $this->object);

        $this->object->setTranslatorEnabled();

        $this->assertAttributeEquals(true, 'translator_enabled', $this->object);
    }

    public function testIsTranslatorEnabled()
    {
        $this->assertTrue($this->object->isTranslatorEnabled());

        $this->object->setTranslatorEnabled(false);

        $this->assertFalse($this->object->isTranslatorEnabled());
    }

    public function testSetTranslatorTextDomain()
    {
        $this->assertAttributeEquals('default', 'translator_text_domain', $this->object);

        $text_domain = 'domain';

        $this->object->setTranslatorTextDomain($text_domain);

        $this->assertAttributeEquals($text_domain, 'translator_text_domain', $this->object);
    }

    public function testGetTranslatorTextDomain()
    {
        $this->assertEquals('default', $this->object->getTranslatorTextDomain());

        $text_domain = 'domain';

        $this->object->setTranslatorTextDomain($text_domain);

        $this->assertEquals($text_domain, $this->object->getTranslatorTextDomain());
    }
}
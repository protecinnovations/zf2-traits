<?php

namespace ProtecTest\ZF2Trait\Form;

use \Protec\ZF2Trait\Form\FormFactoryAwareTrait;
use \Zend\Form\FormFactoryAwareInterface;

class FormFactoryAwareMock implements FormFactoryAwareInterface
{
    use FormFactoryAwareTrait;
}
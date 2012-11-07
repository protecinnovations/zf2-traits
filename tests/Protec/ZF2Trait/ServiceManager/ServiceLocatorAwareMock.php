<?php

namespace ProtecTest\ZF2Trait\ServiceManager;

use \Protec\ZF2Trait\ServiceManager\ServiceLocatorAwareTrait;
use \Zend\ServiceManager\ServiceLocatorAwareInterface;

class ServiceLocatorAwareMock implements ServiceLocatorAwareInterface
{
    use ServiceLocatorAwareTrait;
}
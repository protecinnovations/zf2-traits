<?php

namespace ProtecTest\ZF2Trait\ServiceManager;

use \Protec\ZF2Trait\ServiceManager\ServiceManagerAwareTrait;
use \Zend\ServiceManager\ServiceManagerAwareInterface;

class ServiceManagerAwareMock implements ServiceManagerAwareInterface
{
    use ServiceManagerAwareTrait;
}
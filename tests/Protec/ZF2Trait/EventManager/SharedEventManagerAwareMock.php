<?php

namespace ProtecTest\ZF2Trait\EventManager;

use \Protec\ZF2Trait\EventManager\SharedEventManagerAwareTrait;
use \Zend\EventManager\SharedEventManagerAwareInterface;

class SharedEventManagerAwareMock implements SharedEventManagerAwareInterface
{
    use SharedEventManagerAwareTrait;
}
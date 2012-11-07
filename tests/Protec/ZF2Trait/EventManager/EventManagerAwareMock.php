<?php

namespace ProtecTest\ZF2Trait\EventManager;

use \Protec\ZF2Trait\EventManager\EventManagerAwareTrait;
use \Zend\EventManager\EventManagerAwareInterface;

class EventManagerAwareMock implements EventManagerAwareInterface
{
    use EventManagerAwareTrait;
}
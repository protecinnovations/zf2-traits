<?php

namespace ProtecTest\ZF2Trait\Log;

use \Protec\ZF2Trait\Log\LoggerAwareTrait;
use \Zend\Log\LoggerAwareInterface;

class LoggerAwareMock implements LoggerAwareInterface
{
    use LoggerAwareTrait;
}
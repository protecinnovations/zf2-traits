<?php

namespace ProtecTest\ZF2Trait\Db\Adapter;

use \Protec\ZF2Trait\Db\Adapter\AdapterAwareTrait;
use \Zend\Db\Adapter\AdapterAwareInterface;

class AdapterAwareMock implements AdapterAwareInterface
{
    use AdapterAwareTrait;
}
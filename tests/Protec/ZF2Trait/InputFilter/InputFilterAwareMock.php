<?php

namespace ProtecTest\ZF2Trait\InputFilter;

use \Protec\ZF2Trait\InputFilter\InputFilterAwareTrait;
use \Zend\InputFilter\InputFilterAwareInterface;

class InputFilterAwareMock implements InputFilterAwareInterface
{
    use InputFilterAwareTrait;
}
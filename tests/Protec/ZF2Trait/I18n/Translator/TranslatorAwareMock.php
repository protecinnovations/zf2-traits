<?php

namespace ProtecTest\ZF2Trait\I18n\Translator;

use \Protec\ZF2Trait\I18n\Translator\TranslatorAwareTrait;
use \Zend\I18n\Translator\TranslatorAwareInterface;

class TranslatorAwareMock implements TranslatorAwareInterface
{
    use TranslatorAwareTrait;
}
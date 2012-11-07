<?php

namespace Protec\ZendTrait\InputFilter;

use \Zend\InputFilter\InputFilterInterface;

/**
 * InputFilterAwareTrait
 *
 * @package   Protec\ZendTrait\InputFilter
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait InputFilterAwareTrait
{
    /**
     * @var \Zend\InputFilter\InputFilterInterface
     */
    protected $input_filter = null;

    /**
     * setInputFilter
     *
     * @param \Zend\InputFilter\InputFilterInterface $inputFilter
     * @return
     */
    public function setInputFilter(InputFilterInterface $inputFilter)
    {
        $this->input_filter = $inputFilter;

        return $this;
    }

    /**
     * getInputFilter
     *
     * @return \Zend\InputFilter\InputFilterInterface
     */
    public function getInputFilter()
    {
        return $this->input_filter;
    }
}
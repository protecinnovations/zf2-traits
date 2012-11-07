<?php

namespace Protec\ZendTrait\Db\Adapter;

use \Zend\Db\Adapter\Adapter;

/**
 * AdapterAwareTrait
 *
 * @package   Protec\ZendTrait\Db\Adapter
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait AdapterAwareTrait
{
    /**
     * @var \Zend\Db\Adapter
     */
    protected $adapter = null;

    /**
     * setDbAdapter
     *
     * @param \Zend\Db\Adapter\Adapter $adapter
     * @return
     */
    public function setDbAdapter(Adapter $adapter)
    {
        $this->adapter = $adapter;

        return $this;
    }
}
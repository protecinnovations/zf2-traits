<?php

namespace Protec\ZF2Trait\EventManager;

use \Zend\EventManager\SharedEventManagerInterface;

/**
 * SharedEventManagerAwareTrait
 *
 * @package   Protec\ZF2Trait\EventManager
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait SharedEventManagerAwareTrait
{
    /**
     * @var \Zend\EventManager\SharedEventManagerInterface
     */
    protected $shared_event_manager = null;

    /**
     * setSharedManager
     *
     * @param \Zend\EventManager\SharedEventManagerInterface $sharedEventManager
     * @return
     */
    public function setSharedManager(SharedEventManagerInterface $sharedEventManager)
    {
        $this->shared_event_manager = $sharedEventManager;

        return $this;
    }

    /**
     * getSharedManager
     *
     * @return \Zend\EventManager\SharedEventManagerInterface
     */
    public function getSharedManager()
    {
        return $this->shared_event_manager;
    }

    /**
     * unsetSharedManager
     *
     * @return
     */
    public function unsetSharedManager()
    {
        $this->shared_event_manager = null;

        return $this;
    }
}

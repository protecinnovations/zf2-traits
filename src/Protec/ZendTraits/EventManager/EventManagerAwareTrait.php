<?php

namespace Protec\ZendTrait\EventManager;

use \Zend\EventManager\EventManagerInterface;

/**
 * EventManagerAwareTrait
 *
 * @package   Protec\ZendTrait\EventManager
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait EventManagerAwareTrait
{
    /**
     * @var \Zend\EventManager\EventManagerInterface
     */
    protected $event_manager = null;

    /**
     * setEventManager
     *
     * @param \Zend\EventManager\EventManagerInterface $eventManager
     * @return
     */
    public function setEventManager(EventManagerInterface $eventManager)
    {
        $this->event_manager = $eventManager;

        return $this;
    }
}
<?php

namespace Protec\ZendTrait\Log;

use \Zend\Log\LoggerInterface;

/**
 * LoggerAwareTrait
 *
 * @package   Protec\ZendTrait\Log
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait LoggerAwareTrait
{
    /**
     * @var \Zend\Log\LoggerInterface
     */
    protected $logger = null;

    /**
     * setLogger
     *
     * @param \Zend\Log\LoggerInterface $logger
     * @return
     */
    public function setLogger(LoggerInterface $logger)
    {
        $this->logger = $logger;

        return $this;
    }
}
<?php

namespace Protec\ZendTrait\I18n\Translator;

use \Zend\I18n\Translator\Translator;

/**
 * TranslatorAwareTrait
 *
 * @package   Protec\ZendTrait\I18n\Translator
 * @author    Protec Innovations <support@protecinnovations.co.uk>
 * @copyright 2012 Protec Innovations
 */
trait TranslatorAwareTrait
{
    /**
     * @var \Zend\I18n\Translator\Translator
     */
    protected $translator = null;

    /**
     * @var bool
     */
    protected $translator_enabled = true;

    /**
     * @var string
     */
    protected $translator_text_domain = 'default';

    /**
     * setTranslator
     *
     * @param \Zend\I18n\Translator\Translator $translator
     * @param string $textDomain
     * @return
     */
    public function setTranslator(Translator $translator = null, $textDomain = null)
    {
        $this->translator = $translator;

        if (!is_null($textDomain)) {
            $this->setTranslatorTextDomain($textDomain);
        }

        return $this;
    }

    /**
     * getTranslator
     *
     * @return \Zend\I18n\Translator\Translator
     */
    public function getTranslator()
    {
        return $this->translator;
    }

    /**
     * hasTranslator
     *
     * @return bool
     */
    public function hasTranslator()
    {
        return !is_null($this->translator);
    }

    /**
     * setTranslatorEnabled
     *
     * @param bool $enabled
     * @return
     */
    public function setTranslatorEnabled($enabled = true)
    {
        $this->translator_enabled = $enabled;

        return $this;
    }

    /**
     * isTranslatorEnabled
     *
     * @return bool
     */
    public function isTranslatorEnabled()
    {
        return $this->translator_enabled;
    }

    /**
     * setTranslatorTextDomain
     *
     * @param string $textDomain
     * @return
     */
    public function setTranslatorTextDomain($textDomain = 'default')
    {
        $this->translator_text_domain = $textDomain;

        return $this;
    }

    /**
     * getTranslatorTextDomain
     *
     * @return string
     */
    public function getTranslatorTextDomain()
    {
        return $this->translator_text_domain;
    }
}
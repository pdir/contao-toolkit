<?php

/**
 * @package    contao-toolkit
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015-2016 netzmacht David Molineus.
 * @filesource
 *
 */

namespace Netzmacht\Contao\Toolkit\Component;

/**
 * The ComponentDecorator trait is designed to provide a decorator for content elements and frontend modules.
 *
 * @package Netzmacht\Contao\Toolkit\Component
 */
trait ComponentDecoratorTrait
{
    /**
     * Inner component.
     *
     * @var Component
     */
    protected $component;

    /**
     * {@inheritDoc}
     */
    public function __set($strKey, $varValue)
    {
        $this->component->set($strKey, $varValue);
    }

    /**
     * {@inheritDoc}
     */
    public function __get($strKey)
    {
        return $this->component->get($strKey);
    }

    /**
     * {@inheritDoc}
     */
    public function __isset($strKey)
    {
        return $this->component->has($strKey);
    }

    /**
     * {@inheritDoc}
     */
    public function getModel()
    {
        return $this->component->getModel();
    }

    /**
     * {@inheritDoc}
     */
    public function generate()
    {
        return $this->component->generate();
    }

    /**
     * {@inheritDoc}
     */
    protected function compile()
    {
        // Do nothing.
    }

    /**
     * Get the content element factory.
     *
     * @return ComponentFactory
     */
    abstract protected function getFactory();
}

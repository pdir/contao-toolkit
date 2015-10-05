<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Toolkit\Data\Alias\Filter;

/**
 * SuffixFilter adds a numeric suffix until a unique value is given.
 *
 * @package Netzmacht\Contao\Toolkit\Data\Alias\Filter
 */
class SuffixFilter extends AbstractFilter
{
    /**
     * The internal index counter.
     *
     * @var int
     */
    private $index;

    /**
     * {@inheritDoc}
     */
    public function __construct($break = true)
    {
        parent::__construct($break, static::COMBINE_APPEND);
    }

    /**
     * {@inheritDoc}
     */
    public function initialize()
    {
        $this->index = 2;
    }

    /**
     * {@inheritDoc}
     */
    public function repeatUntilUnique()
    {
        true;
    }

    /**
     * {@inheritDoc}
     */
    public function apply($model, $value, $separator)
    {
        return $this->combine($value, $this->index++, $separator);
    }
}
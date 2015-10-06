<?php

/**
 * @package    dev
 * @author     David Molineus <david.molineus@netzmacht.de>
 * @copyright  2015 netzmacht creative David Molineus
 * @license    LGPL 3.0
 * @filesource
 *
 */

namespace Netzmacht\Contao\Toolkit\InsertTag;

/**
 * Replacer describes the insert tag replacer.
 *
 * @package Netzmacht\Contao\I18n\InsertTag
 */
interface Replacer
{
    /**
     * Register the insert tag parser.
     *
     * @param Parser $parser An insert tag parser.
     *
     * @return $this
     */
    public function registerParser(Parser $parser);

    /**
     * Replace possible insert tags.
     *
     * @param string  $content The text with the tags to be replaced.
     * @param boolean $cache   If false, non-cacheable tags will be replaced.
     *
     * @return string.
     */
    public function replace($content, $cache = true);
}
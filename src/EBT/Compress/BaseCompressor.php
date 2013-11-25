<?php

/*
 * This file is a part of the Compress library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Compress;

/**
 * BaseCompressor
 */
abstract class BaseCompressor implements CompressorInterface
{
    const NAME = 'base';

    /**
     * {@inheritDoc}
     */
    public static function getName()
    {
        return static::NAME;
    }

    /**
     * {@inheritDoc}
     */
    public function compressUTF8encoded()
    {
        return false;
    }
}

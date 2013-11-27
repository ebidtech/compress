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
 * GzencodeCompressorTrait
 */
trait GzencodeCompressorTrait
{
    /**
     * @var int
     */
    protected $level = -1;

    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return GzencodeCompressor::NAME;
    }

    /**
     * {@inheritDoc}
     */
    protected function compress($data)
    {
        return gzencode($data);
    }

    /**
     * {@inheritDoc}
     */
    protected function uncompress($data)
    {
        return gzdecode($data);
    }

    /**
     * {@inheritDoc}
     */
    public function compressUTF8encoded()
    {
        return false;
    }
}

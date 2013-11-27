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
 * GzcompressCompressorTrait
 */
trait GzcompressCompressorTrait
{
    /**
     * @var int
     */
    protected $level = -1;

    /**
     * {@inheritDoc}
     */
    protected function getCompressorName()
    {
        return GzcompressCompressor::NAME;
    }

    /**
     * {@inheritDoc}
     */
    protected function compress($data)
    {
        return gzcompress($data, $this->level);
    }

    /**
     * {@inheritDoc}
     */
    protected function uncompress($data)
    {
        return gzuncompress($data);
    }

    /**
     * {@inheritDoc}
     */
    protected function compressUTF8encoded()
    {
        return false;
    }
}

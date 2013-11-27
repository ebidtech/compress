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
 * GzinflateCompressorTrait
 */
trait GzinflateCompressorTrait
{
    /**
     * {@inheritDoc}
     */
    public function getCompressorName()
    {
        return GzinflateCompressor::NAME;
    }

    /**
     * {@inheritDoc}
     */
    protected function compress($data)
    {
        return gzdeflate($data);
    }

    /**
     * {@inheritDoc}
     */
    protected function uncompress($data)
    {
        return gzinflate($data);
    }

    /**
     * {@inheritDoc}
     */
    public function compressUTF8encoded()
    {
        return false;
    }
}

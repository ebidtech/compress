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
 * NullCompressorTrait
 */
trait NullCompressorTrait
{
    /**
     * {@inheritDoc}
     */
    public function getName()
    {
        return NullCompressor::NAME;
    }

    /**
     * {@inheritDoc}
     */
    protected function compress($data)
    {
        return $data;
    }

    /**
     * {@inheritDoc}
     */
    protected function uncompress($data)
    {
        return $data;
    }

    /**
     * {@inheritDoc}
     */
    public function compressUTF8encoded()
    {
        return true;
    }
}

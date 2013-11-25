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
 * GzinflateCompressor
 */
class GzinflateCompressor extends BaseCompressor
{
    const NAME = 'gzinflate';

    /**
     * {@inheritDoc}
     */
    public function compress($data)
    {
        return gzdeflate($data);
    }

    /**
     * {@inheritDoc}
     */
    public function uncompress($data)
    {
        return gzinflate($data);
    }
}

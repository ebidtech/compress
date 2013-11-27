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
class GzinflateCompressor implements CompressorInterface
{
    const NAME = 'gzinflate';

    use GzinflateCompressorTrait {
        getCompressorName as public;
        compressUTF8encoded as public;
        compress as public;
        uncompress as public;
    }
}

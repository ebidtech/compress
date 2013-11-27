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

use EBT\Compress\Exception\InvalidArgumentException;

/**
 * GzcompressCompressor
 */
class GzcompressCompressor implements CompressorInterface
{
    use GzcompressCompressorTrait {
        getCompressorName as public;
        compressUTF8encoded as public;
        compress as public;
        uncompress as public;
    }

    const NAME = 'gzcompress';

    /**
     * @param int $level    The level of compression.
     *                      Can be given as 0 for no compression up to 9 for maximum compression.
     *                      If -1 is used, the default compression of the zlib library is used which is 6.
     *
     * @throws InvalidArgumentException
     */
    public function __construct($level = -1)
    {
        if (!is_int($level) || $level < -1 || $level > 9) {
            throw new InvalidArgumentException(
                sprintf(
                    'Gzcompress level must be an integer from -1 to 9',
                    is_scalar($level) ? $level : gettype($level)
                )
            );
        }

        $this->level = $level;
    }
}

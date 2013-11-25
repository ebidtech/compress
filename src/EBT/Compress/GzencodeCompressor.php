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
 * GzencodeCompressor
 */
class GzencodeCompressor extends BaseCompressor
{
    const NAME = 'gzencode';

    /**
     * @var int
     */
    private $level;

    /**
     * @param int $level    The level of compression. Can be given as 0 for no compression up to 9 for maximum
     *                      compression. If not given, the default compression level will be the default compression
     *                      level of the zlib library.
     *
     * @throws InvalidArgumentException
     */
    public function __construct($level = -1)
    {
        if (!is_int($level) || $level < -1 || $level > 9) {
            throw new InvalidArgumentException(
                sprintf(
                    'Gzencode level must be an integer from -1 to 9',
                    is_scalar($level) ? $level : gettype($level)
                )
            );
        }

        $this->level = $level;
    }

    /**
     * {@inheritDoc}
     */
    public function compress($data)
    {
        return gzencode($data);
    }

    /**
     * {@inheritDoc}
     */
    public function uncompress($data)
    {
        return gzdecode($data);
    }
}

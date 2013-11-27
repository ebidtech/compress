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
 * CompressBuilder
 */
class CompressBuilder
{
    const GZCOMPRESS = GzcompressCompressor::NAME;
    const GZENCODE = GzencodeCompressor::NAME;
    const GZINFLATE = GzinflateCompressor::NAME;
    // @codingStandardsIgnoreStart
    const NULL = NullCompressor::NAME;
    // @codingStandardsIgnoreEnd

    protected static $mapping = array(
        self::GZCOMPRESS => 'EBT\\Compress\\GzcompressCompressor',
        self::GZENCODE => 'EBT\\Compress\\GzencodeCompressor',
        self::GZINFLATE => 'EBT\\Compress\\GzinflateCompressor',
        // @codingStandardsIgnoreStart
        self::NULL => 'EBT\\Compress\\NullCompressor',
        // @codingStandardsIgnoreEnd
    );

    /**
     * @return CompressBuilder
     */
    public static function create()
    {
        return new static();
    }

    /**
     * @param string $name
     *
     * @return CompressorInterface
     *
     * @throws InvalidArgumentException
     */
    public function get($name)
    {
        $name = strtolower((string) $name);
        $mapping = static::getMapping();

        if (!isset($mapping[$name])) {
            throw new InvalidArgumentException(sprintf('Unrecognized compressor "%s"', $name));
        }

        $className = $mapping[$name];

        return new $className();
    }

    /**
     * @return array
     */
    public static function getMapping()
    {
        return static::$mapping;
    }
}

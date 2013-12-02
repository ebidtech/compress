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

    protected $mapping = array(
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
     * @param array  $options
     *
     * @throws InvalidArgumentException
     * 
     * @return CompressorInterface
     */
    public function get($name, array $options = array())
    {
        $name = strtolower((string) $name);

        if (!$this->has($name)) {
            throw new InvalidArgumentException(sprintf('Unrecognized compressor "%s"', $name));
        }

        $mapping = $this->getMapping();
        $className = $mapping[$name];

        if ($options === array()) {
            return new $className();
        }

        $reflection = new \ReflectionClass($className);
        return $reflection->newInstanceArgs($options);
    }

    /**
     * @param string $name
     *
     * @return bool
     */
    public function has($name)
    {
        $name = strtolower((string) $name);

        $mapping = $this->getMapping();

        return isset($mapping[$name]);
    }

    /**
     * @return array
     */
    public function getMapping()
    {
        return $this->mapping;
    }
}

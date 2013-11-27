<?php

/*
 * This file is a part of the Compress library.
 *
 * (c) 2013 Ebidtech
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace EBT\Compress\Tests;

use EBT\Compress\GzcompressCompressor;

/**
 * GzcompressTest
 */
class GzcompressTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals(GzcompressCompressor::NAME, (new GzcompressCompressor())->getName());
    }

    public function testCompressUncompress()
    {
        $originalData = 'just a test';

        $gzcompress = new GzcompressCompressor();
        $compressData = $gzcompress->compress($originalData);
        $this->assertEquals($originalData, $gzcompress->uncompress($compressData));
    }

    /**
     * @expectedException \EBT\Compress\Exception\InvalidArgumentException
     */
    public function testLevelTooBig()
    {
        new GzcompressCompressor(20);
    }

    /**
     * @expectedException \EBT\Compress\Exception\InvalidArgumentException
     */
    public function testLevelTooSmall()
    {
        new GzcompressCompressor(-10);
    }

    public function testCompressUTF8encoded()
    {
        $this->assertFalse((new GzcompressCompressor())->compressUTF8encoded());
    }
}

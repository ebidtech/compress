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

use EBT\Compress\GzencodeCompressor;

/**
 * GzencodeTest
 */
class GzencodeTest extends TestCase
{
    public function testCompressUncompress()
    {
        $originalData = 'just a test';

        $gzencode = new GzencodeCompressor();
        $compressData = $gzencode->compress($originalData);
        $this->assertEquals($originalData, $gzencode->uncompress($compressData));
    }

    /**
     * @expectedException \EBT\Compress\Exception\InvalidArgumentException
     */
    public function testLevelTooBig()
    {
        new GzencodeCompressor(20);
    }

    /**
     * @expectedException \EBT\Compress\Exception\InvalidArgumentException
     */
    public function testLevelTooSmall()
    {
        new GzencodeCompressor(-10);
    }
}

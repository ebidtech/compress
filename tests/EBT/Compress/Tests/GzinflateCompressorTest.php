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

use EBT\Compress\GzinflateCompressor;

/**
 * GzinflateTest
 */
class GzinflateTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals(GzinflateCompressor::NAME, (new GzinflateCompressor())->getName());
    }

    public function testCompressUncompress()
    {
        $originalData = 'just a test';

        $gzinflate = new GzinflateCompressor();
        $compressData = $gzinflate->compress($originalData);
        $this->assertEquals($originalData, $gzinflate->uncompress($compressData));
    }

    public function testCompressUTF8encoded()
    {
        $this->assertFalse((new GzinflateCompressor())->compressUTF8encoded());
    }
}

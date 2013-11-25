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

use EBT\Compress\NullCompressor;

/**
 * NullCompressorTest
 */
class NullCompressorTest extends TestCase
{
    public function testCompressUncompress()
    {
        $compressor = new NullCompressor();
        $data = 'test';
        $this->assertEquals($data, $compressor->uncompress($compressor->compress($data)));
    }

    public function testCompressUTF8encoded()
    {
        $this->assertTrue((new NullCompressor())->compressUTF8encoded());
    }
}

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

use EBT\Compress\BaseCompressor;

/**
 * BaseCompressorTest
 */
class BaseCompressorTest extends TestCase
{
    public function testGetName()
    {
        $this->assertEquals(BaseCompressor::NAME, BaseCompressor::getName());
    }

    public function testCompressUTF8encoded()
    {
        /** @var BaseCompressor $compressor */
        $compressor = $this->getMockForAbstractClass('EBT\Compress\BaseCompressor');
        $this->assertFalse($compressor->compressUTF8encoded());
    }
}

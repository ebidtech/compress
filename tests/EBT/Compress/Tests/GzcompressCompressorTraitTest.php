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

use EBT\Compress\GzcompressCompressorTrait;

/**
 * GzcompressCompressorTraitTest
 */
class GzcompressCompressorTraitTest extends TestCase
{
    use GzcompressCompressorTrait;

    public function testCompressUncompress()
    {
        $compressedData = $this->compress('test');
        $this->assertEquals('test', $this->uncompress($compressedData));
    }
}

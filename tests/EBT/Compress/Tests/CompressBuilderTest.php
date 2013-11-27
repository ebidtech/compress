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

use EBT\Compress\CompressBuilder;

/**
 * CompressBuilderTest
 */
class CompressBuilderTest extends TestCase
{
    /**
     * @expectedException \EBT\Compress\Exception\InvalidArgumentException
     */
    public function testGetUnrecognized()
    {
        CompressBuilder::create()->get('Unrecognized');
    }

    public function testGet()
    {
        foreach (CompressBuilder::getMapping() as $name => $class) {
            $compressor = CompressBuilder::create()->get($name);
            $this->assertInstanceOf('EBT\Compress\CompressorInterface', $compressor);
            $this->assertEquals($class, get_class($compressor));
        }
    }
}

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

/**
 * CompressorInterface
 */
interface CompressorInterface
{
    /**
     * @param string $data
     *
     * @return string The compressed string
     */
    public function compress($data);

    /**
     * @param string $data
     *
     * @return string The original string
     */
    public function uncompress($data);

    /**
     * @return bool True if compressed data is utf-8 encoded
     */
    public function compressUTF8encoded();

    /**
     * @return string
     */
    public function getName();
}

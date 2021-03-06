<?php

/*
 * This file is part of Statika.
 *
 * (c) Sven Scheffler <ven@cersei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Statika\Configuration\Application;

use Statika\Configuration\Configuration;

/**
 * @author Sven Scheffler <ven@cersei.de>
 */
abstract class ApplicationConfiguration extends Configuration
{
    /**
     *
     * @var array
     */
    protected $compressors = array();

    /**
     *
     * @return Statika\Compressor\Compressor
     */
    public function getCompressors()
    {
        return $this->compressors;
    }

    /**
     *
     * @param array $hash
     */
    public function assignFromHash(array $hash)
    {
        $this->compressors = $hash['compressors'];
    }

}

<?php

/*
 * This file is part of Statika.
 *
 * (c) Sven Scheffler <ven@cersei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Statika\Configuration;

use Statika\File\File;

/**
 * @author Sven Scheffler <ven@cersei.de>
 */
abstract class Configuration
{
    /**
     *
     * @param  \Statika\Configuration\Validator $validator
     * @return bool
     */
    public function validate(ValidatorInterface $validator)
    {
        return $validator->validate($this);
    }

    /**
     *
     * @return \Statika\Configuration\Configuration
     */
    abstract public function fromFile(File $configFile);
}

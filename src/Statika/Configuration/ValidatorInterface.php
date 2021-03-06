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

/**
 * @author Sven Scheffler <ven@cersei.de>
 */
interface ValidatorInterface
{
    /**
     * Validate the given config
     *
     * @param \Statika\Configuration\Configuration $config
     */
    public function validate(Configuration $config);
}

<?php

/*
 * This file is part of Statika.
 *
 * (c) Sven Scheffler <ven@cersei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Statika\File;

use \Symfony\Component\Console\Output\OutputInterface;

/**
 * @author Sven Scheffler <ven@cersei.de>
 */
interface Aggregator
{
    public function setOutput(OutputInterface $output);

    public function getOutput();

    public function aggregate();
}

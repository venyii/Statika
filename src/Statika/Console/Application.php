<?php

/*
 * This file is part of Statika.
 *
 * (c) Sven Scheffler <ven@cersei.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Statika\Console;

use Statika\Statika;
use Symfony\Component\Console\Application as ConsoleApplication;

/**
 * @author Sven Scheffler <ven@cersei.de>
 */
class Application extends ConsoleApplication
{
    public function __construct()
    {
        parent::__construct(Statika::CLI_NAME, Statika::VERSION);

        $this->addCommands(array(
            new Command\AboutCommand(),
            new Command\ValidateCommand(),
            new Command\CompressCommand()
        ));
    }

}

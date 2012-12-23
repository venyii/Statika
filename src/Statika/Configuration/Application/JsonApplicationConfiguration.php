<?php

/*
 * This file is part of Statika.
 *
 * (c) Sven Scheffler <schefflor@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Statika\Configuration\Application;

use \Statika\File\File;
use Statika\Configuration\Application\ApplicationConfiguration;

/**
 * @author Sven Scheffler <schefflor@gmail.com>
 */
class JsonApplicationConfiguration extends ApplicationConfiguration {

	public function fromFile(File $configFile) {
		$this->assignFromHash(json_decode(file_get_contents($configFile->getRealPath()), true));

		return $this;
	}

}
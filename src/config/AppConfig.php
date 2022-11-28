<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


/**
 * Class AppConfig
 */
class AppConfig
{
	protected string $projectRoot;

	static function getProjectRoot() : string
	{
		return "/path/to/project/root";
	}
}
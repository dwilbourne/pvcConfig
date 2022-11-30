<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


use pvc\interfaces\config\AppConfigInterface;

/**
 * Class AppConfig
 */
class AppConfig implements AppConfigInterface
{
	protected string $projectRoot;

	static function getProjectRoot(): string
	{
		return "/path/to/project/root";
	}
}
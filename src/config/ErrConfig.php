<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


use pvc\interfaces\config\ErrConfigInterface;

/**
 * Class ErrConfig
 */
class ErrConfig implements ErrConfigInterface
{


	public static function createExceptionCode(string $libraryName, int $localCatalogCode):	int
	{
		$globalPrefix = (string) self::getLibraryCode($libraryName);
		return (int) ($globalPrefix . $localCatalogCode);
	}

	public static function getLibraryCode(string $libraryName): int
	{
		$globalPrefixes = [
			'pvc\err\stock' => 1000,
		];
		return $globalPrefixes[$libraryName] ?? 0;
	}
}
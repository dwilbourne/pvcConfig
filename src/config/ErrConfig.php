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
	public static function createGlobalExceptionCode(string $namespacedExceptionCatalogClassname, int
	$localCatalogCode):	int
	{
		$globalPrefixes = [
			"pvc\err\ExceptionCatalog" => 1000,
		];
		
		$globalPrefix = $globalPrefixes[$namespacedExceptionCatalogClassname];
		return $globalPrefix * 1000 + $localCatalogCode;
	}
}
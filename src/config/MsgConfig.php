<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


use pvc\interfaces\config\MsgConfigInterface;
use pvc\interfaces\msg\DomainCatalogLoaderInterface;
use pvc\msg\catalog\DomainCatalogFileLoaderPHP;

/**
 * Class MsgConfig.  Contains the information about where message catalogs live and what sort of loader
 * you need to load each catalog
 */
class MsgConfig implements MsgConfigInterface
{

	public static function getDomainCatalogLoader(string $domain): DomainCatalogLoaderInterface
	{
		$domainCatalogs = [
			// key is the domain name for the messages
			// value needs to be abstracted out beyond just a filepath?
			"messages" => "path/to/messages"
		];
		$loader = new DomainCatalogFileLoaderPHP();
		$loader->setDomainCatalogFilename($domainCatalogs[$domain]);
		return $loader;
	}
}
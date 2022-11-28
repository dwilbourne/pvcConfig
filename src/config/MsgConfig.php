<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


/**
 * Class MsgConfig.  Contains the information about where message catalogs live
 */
class MsgConfig
{

	protected static array $domainCatalogs = [
		// key is the domain name for the messages
		// paths should be relative to the project root
		"messages" => "path/to/messages"
	];
}
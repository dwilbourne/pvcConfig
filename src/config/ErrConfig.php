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
	const INTERFACES_CODE = 10;
	const MSG_CODE = 11;
	const ERR_CODE = 12;

	public static function getExceptionMsgLocale(): string
	{
		return "en_US";
	}

}
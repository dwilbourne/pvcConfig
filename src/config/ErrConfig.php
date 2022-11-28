<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;


/**
 * Class ErrConfig
 */
class ErrConfig
{

	public static function getExceptionMsgCodePrefix(string $msgId): int
	{
		/**
		 * @var array|string[]
		 * the value is the prefix which is prepended to all exception codes, the key is the name of the
		 * pvc library in which the exception message lives.  This allows us to more easily create globally
		 * unique exception codes without using a central repository for them.
		 */
		$errCodePrefixes = [
			"interfaces" => 10,
			"msg" => 11,
			"err" => 12,
		];

		return $errCodePrefixes[$msgId];
	}
}
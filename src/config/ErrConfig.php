<?php

declare (strict_types=1);
/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

namespace pvc\config;




use Exception;
use pvc\interfaces\config\ErrConfigInterface;

/**
 * Class ErrConfig
 */
class ErrConfig implements ErrConfigInterface
{
	protected array $libraryCodes;

	/**
	 * registerLibrary
	 * @param string $libraryName
	 * @param int $libraryCode
	 */
	public function registerLibrary(string $libraryName, int $libraryCode): void
	{
		if ($libraryCode != ($this->libraryCodes[$libraryName] ?? null)) {
			$format = "Error attempting to re-register exception %s library with a different library code.";
			$msg = sprintf($format, $libraryName);
			throw new Exception($msg);
		}
		$this->libraryCodes[$libraryName] = $libraryCode;
	}

	/**
	 * isLibraryRegistered
	 * @param string $libraryName
	 * @return bool
	 */
	public function isLibraryRegistered(string $libraryName): bool
	{
		return isset($this->libraryCodes[$libraryName]);
	}

	/**
	 * createExceptionCode
	 * @param string $libraryName
	 * @param int $localCatalogCode
	 * @return int
	 * @throws Exception
	 */
	public function createExceptionCode(string $libraryName, int $localCatalogCode):	int
	{
		$globalPrefix = (string) self::getLibraryCode($libraryName);
		return (int) ($globalPrefix . $localCatalogCode);
	}

	/**
	 * getLibraryCode
	 * @param string $libraryName
	 * @return int
	 * @throws Exception
	 */
	public function getLibraryCode(string $libraryName): int
	{
		if (!$this->isLibraryRegistered($libraryName)) {
			$format = "Error attempting to get library code for unregistered library %s.";
			$msg = sprintf($format, $libraryName);
			throw new Exception($msg);
		}
		return $this->libraryCodes[$libraryName];
	}

}
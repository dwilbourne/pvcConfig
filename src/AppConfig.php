<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvc\config;

use pvc\config\err\InvalidProjectRootException;
use pvc\interfaces\config\AppConfigInterface;

/**
 * Class AppConfig
 */
class AppConfig implements AppConfigInterface
{
    protected static string $project_root = '';

    public static function setProjectRoot(string $dirName): void
    {
        if (!is_dir($dirName)) {
            throw new InvalidProjectRootException($dirName);
        }
        self::$project_root = $dirName;
    }

    public static function unsetProjectRoot(): void
    {
        self::$project_root = '';
    }

    public static function getProjectRoot(): string
    {
        return self::$project_root;
    }
}

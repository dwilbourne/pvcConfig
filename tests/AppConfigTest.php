<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare (strict_types=1);

namespace pvcTests\config;

use PHPUnit\Framework\TestCase;
use pvc\config\AppConfig;
use pvc\config\err\InvalidProjectRootException;

class AppConfigTest extends TestCase
{
    public function setUp(): void
    {
        AppConfig::unsetProjectRoot();
    }

    /**
     * testSetProjectRootThrowsExceptionWithBadDirectoryArgument
     * @throws InvalidProjectRootException
     * @covers \pvc\config\AppConfig::setProjectRoot
     */
    public function testSetProjectRootThrowsExceptionWithBadDirectoryArgument(): void
    {
        $badDir = 'foo';
        self::expectException(InvalidProjectRootException::class);
        AppConfig::setProjectRoot($badDir);
    }

    /**
     * testGetProjectRootReturnsEmptyStringWhenProjectRootNotSet
     * @covers \pvc\config\AppConfig::getProjectRoot
     */
    public function testGetProjectRootReturnsEmptyStringWhenProjectRootNotSet(): void
    {
        self::assertEmpty(AppConfig::getProjectRoot());
    }

    /**
     * testSetGetProjectRoot
     * @throws InvalidProjectRootException
     * @covers \pvc\config\AppConfig::setProjectRoot
     * @covers \pvc\config\AppConfig::getProjectRoot
     * @covers \pvc\config\AppConfig::unsetProjectRoot
     */
    public function testSetGetProjectRoot(): void
    {
        $testDir = __DIR__;
        AppConfig::setProjectRoot($testDir);
        self::assertEquals($testDir, AppConfig::getProjectRoot());

        AppConfig::unsetProjectRoot();
        self::assertEmpty(AppConfig::getProjectRoot());
    }
}

<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */

declare(strict_types=1);

namespace pvcTests\config\err;

use pvc\config\err\_ConfigXData;
use pvc\err\XDataTestMaster;

/**
 * Class _MsgXDataTest
 */
class _ConfigXDataTest extends XDataTestMaster
{
    /**
     * testLibrary
     * @covers \pvc\config\err\_ConfigXData::getLocalXCodes
     * @covers \pvc\config\err\_ConfigXData::getXMessageTemplates
     * @covers \pvc\config\err\InvalidProjectRootException::__construct
     */
    public function testLibrary(): void
    {
        $xData = new _ConfigXData();
        self::assertTrue($this->verifyLibrary($xData));
    }
}

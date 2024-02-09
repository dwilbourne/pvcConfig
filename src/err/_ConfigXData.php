<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 * @noinspection PhpCSValidationInspection
 */

declare(strict_types=1);

namespace pvc\config\err;

use pvc\err\XDataAbstract;

/**
 * Class _MsgXData
 * @noinspection PhpCSValidationInspection
 */
class _ConfigXData extends XDataAbstract
{
    public function getLocalXCodes(): array
    {
        return [
            InvalidProjectRootException::class => 1001,
        ];
    }

    public function getXMessageTemplates(): array
    {
        return [
            InvalidProjectRootException::class => 'Invalid project root ${badDir}. Must be a (readable) directory',
        ];
    }
}

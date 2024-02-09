<?php

/**
 * @author: Doug Wilbourne (dougwilbourne@gmail.com)
 */
declare(strict_types=1);

namespace pvc\config\err;

use pvc\err\stock\LogicException;
use Throwable;

/**
 * Class InvalidProjectRootException
 */
class InvalidProjectRootException extends LogicException
{
    public function __construct(string $badDir, Throwable $prev = null)
    {
        parent::__construct($badDir, $prev);
    }
}
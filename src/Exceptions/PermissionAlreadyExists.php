<?php

namespace Maklad\Permission\Exceptions;

use Throwable;

class PermissionAlreadyExists extends MakladException
{
    /**
     * PermissionAlreadyExists constructor.
     *
     * @param string $message
     * @param int $code
     * @param Throwable|null $previous
     */
    public function __construct($message = "", $code = 0, Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }
}

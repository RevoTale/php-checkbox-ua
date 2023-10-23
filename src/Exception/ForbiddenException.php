<?php

namespace RevoTale\CheckboxUA\Exception;

use RuntimeException;

class ForbiddenException extends RuntimeException implements ClientException
{
    public function __construct(string $message)
    {
        parent::__construct($message, 403);
    }
}
